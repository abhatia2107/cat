<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mockhistories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MockHistoryController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mockhistories = Mockhistories::latest()->get();
		return view('mockhistory.index', compact('mockhistories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mockhistory.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Mockhistories::create($request->all());
		return redirect('mockhistory');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mockhistory = Mockhistories::findOrFail($id);
		return view('mockhistory.show', compact('mockhistory'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mockhistory = Mockhistories::findOrFail($id);
		return view('mockhistory.edit', compact('mockhistory'));
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
		$mockhistory = Mockhistories::findOrFail($id);
		$mockhistory->update($request->all());
		return redirect('mockhistory');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mockhistories::destroy($id);
		return redirect('mockhistory');
	}

}
