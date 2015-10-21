<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subscriptions;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubscriptionController extends Controller
{

	/**
	 * SubscriptionsController constructor.
	 */

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['create', 'store']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subscriptions = Subscriptions::latest()->get();
		return view('subscription.index', compact('subscriptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('subscription.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, ['email' => 'required|email|unique:subscriptions']); // Uncomment and modify if needed.

		$data=$request->all();

		Subscriptions::create($data);

		$data['name'] = trans('subscription.subscription_name');

		$name = trans('subscription.subscription_name');
		$email = $data['email'];
		$subject= trans('subscription.subscription_email_subject');

		Mail::queue('emails.subscription_submitted', $data, function($message) use ($email, $name ,$subject)
		{
			$message->bcc("abhishek.bhatia@hobbyix.com","Abhishek Bhatia")->to($email, $name)->subject($subject);
		});
		return redirect('/')->with('success',trans('subscription.subscription'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subscription = Subscriptions::findOrFail($id);
		return view('subscription.show', compact('subscription'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subscription = Subscriptions::findOrFail($id);
		return view('subscription.edit', compact('subscription'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$subscription = Subscriptions::findOrFail($id);
		$subscription->update($request->all());
		return redirect('subscription');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Subscriptions::destroy($id);
		return redirect('subscription');
	}

}
