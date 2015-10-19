<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => array('required', 'regex: /^([0]|\+91)?[789]\d{9}$/', 'unique:users'),
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $data['confirmation_code']=str_random();
//        dd($data);
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'username' => $data['username'],
            'confirmation_code'=>$data['confirmation_code'],
            'password' => bcrypt($data['password']),
        ]);
        $data['id']=$user->id;
//        dd($data);
        $first_name = $data['first_name'];
        $email = $data['email'];
        $subject= trans('auth.welcome', ['first_name', $data['first_name']]);

        Mail::queue('emails.verify', $data, function($message) use ($email, $first_name ,$subject)
        {
            $message->bcc("abhishek.bhatia@hobbyix.com","Abhishek Bhatia")->to($email, $first_name)->subject($subject);
        });

        return $user;
    }


    /**
     *Function to verify the email of the newly registered user.
     *
     *@param integer $id
     *@param string $confirmation_code
     *@return Route to login
     */
    public function getEmailVerify($id, $confirmation_code)
    {
        $validate=User::find($id);
        if($validate)
        {
            /* to check whether the email has been already verified or not  */
            if($validate->confirmed==1)
            {
                return redirect('/')->with('success',trans('user.email_already_verified'));
            }
            /* to check the whether confirmation code is matching or not */
            if($validate->confirmation_code==$confirmation_code)
            {
                $validate->confirmed=1;
                $validate->confirmation_code=null;
                $validate->save();
                return $this->welcome($id);
            }
        }
        else
        {
            return redirect('/auth/register')->with('failure',trans('user.email_verification_failed'));
        }
    }

    public function welcome($id)
    {
        Auth::loginUsingId($id);
        $user=User::find($id)->toArray();
        $email=$user['email'];
        $name=$user['username'];
        $data = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'email' => $email,
        ];

        /*Welcome on board mail is to be sent to the newly registered user*/
        $subject = trans('user.user_welcome_mail_subject');
        Mail::queue('emails.welcome', $data, function ($message) use ($email, $name, $subject) {
            $message->bcc("abhishek.bhatia@hobbyix.com","Abhishek Bhatia")->to($email, $name)->subject($subject);
        });
        return redirect('/')->with('success',trans('user.welcome',array("name"=>$user['first_name'])));
    }

}
