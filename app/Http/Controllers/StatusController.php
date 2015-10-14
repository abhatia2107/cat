<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cat_statuses;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatusController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cat_statuses = Cat_statuses::latest()->get();
		return view('cat_status.index', compact('cat_statuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cat_status.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Cat_statuses::create($request->all());
		return redirect('cat_status');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cat_status = Cat_statuses::findOrFail($id);
		return view('cat_status.show', compact('cat_status'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cat_status = Cat_statuses::findOrFail($id);
		return view('cat_status.edit', compact('cat_status'));
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
		$cat_status = Cat_statuses::findOrFail($id);
		$cat_status->update($request->all());
		return redirect('cat_status');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cat_statuses::destroy($id);
		return redirect('cat_status');
	}

}
