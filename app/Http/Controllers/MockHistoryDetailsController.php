<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mockhistorydetails;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MockHistoryDetailsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mockhistorydetails = Mockhistorydetails::latest()->get();
		return view('mockhistorydetails.index', compact('mockhistorydetails'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mockhistorydetails.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Mockhistorydetails::create($request->all());
		return redirect('mockhistorydetails');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mockhistorydetail = Mockhistorydetails::findOrFail($id);
		return view('mockhistorydetails.show', compact('mockhistorydetail'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mockhistorydetail = Mockhistorydetails::findOrFail($id);
		return view('mockhistorydetails.edit', compact('mockhistorydetail'));
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
		$mockhistorydetail = Mockhistorydetails::findOrFail($id);
		$mockhistorydetail->update($request->all());
		return redirect('mockhistorydetails');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mockhistorydetails::destroy($id);
		return redirect('mockhistorydetails');
	}

}
