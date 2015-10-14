<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subexamtypes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubExamTypesController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subexamtypes = Subexamtypes::latest()->get();
		return view('subexamtypes.index', compact('subexamtypes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('subexamtypes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Subexamtypes::create($request->all());
		return redirect('subexamtypes');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subexamtype = Subexamtypes::findOrFail($id);
		return view('subexamtypes.show', compact('subexamtype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subexamtype = Subexamtypes::findOrFail($id);
		return view('subexamtypes.edit', compact('subexamtype'));
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
		$subexamtype = Subexamtypes::findOrFail($id);
		$subexamtype->update($request->all());
		return redirect('subexamtypes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Subexamtypes::destroy($id);
		return redirect('subexamtypes');
	}

}
