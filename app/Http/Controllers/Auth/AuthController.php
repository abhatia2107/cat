<?php

namespace App\Http\Controllers\Auth;

use App\User;
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

        Mail::queue('emails.welcome', $data, function($message) use ($email, $first_name ,$subject)
        {
            $message->bcc("abhishek.bhatia@hobbyix.com","Abhishek Bhatia")->to($email, $first_name)->subject($subject);
        });

        return $user;
    }


    /**
     *Function to verify the email of the newly registered user.
     *
     *@param integer id and string confirmation code;
     *@return Route to login
     */
    public function getEmailVerify($id,$confirmationCode)
    {
        $validate=$this->user->find($id);
        if($validate)
        {
            /* to check whether the email has been already verified or not  */
            if($validate->confirmed==1)
            {
                return redirect('/')->with('success',Lang::get('user.email_already_verified'));
            }
            /* to check the whether confirmation code is matching or not */
            if($validate->confirmation_code==$confirmationCode)
            {
                $validate->confirmed=1;
                $validate->confirmation_code="";
                $validate->save();
                return $this->welcome($id);
            }
            else
            {
                return redirect('/auth/register')->with('failure',Lang::get('user.email_verification_failed'));
            }
        }
    }

}
