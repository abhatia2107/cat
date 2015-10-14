<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mocksections;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MockSectionsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mocksections = Mocksections::latest()->get();
		return view('mocksections.index', compact('mocksections'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mocksections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Mocksections::create($request->all());
		return redirect('mocksections');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mocksection = Mocksections::findOrFail($id);
		return view('mocksections.show', compact('mocksection'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mocksection = Mocksections::findOrFail($id);
		return view('mocksections.edit', compact('mocksection'));
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
		$mocksection = Mocksections::findOrFail($id);
		$mocksection->update($request->all());
		return redirect('mocksections');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mocksections::destroy($id);
		return redirect('mocksections');
	}

}
