<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\LoginTypes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LoginTypeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$logintype = LoginTypes::latest()->get();
		return view('logintype.index', compact('logintype'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('logintype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		LoginTypes::create($request->all());
		return redirect('logintype');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$logintype = LoginTypes::findOrFail($id);
		return view('logintype.show', compact('logintype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$logintype = LoginTypes::findOrFail($id);
		return view('logintype.edit', compact('logintype'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$logintype = LoginTypes::findOrFail($id);
		$logintype->update($request->all());
		return redirect('logintype');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		LoginTypes::destroy($id);
		return redirect('logintype');
	}

}
