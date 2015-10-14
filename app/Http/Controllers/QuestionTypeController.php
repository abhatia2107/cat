<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Questiontypes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuestionTypeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questiontypes = Questiontypes::latest()->get();
		return view('questiontype.index', compact('questiontypes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('questiontype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Questiontypes::create($request->all());
		return redirect('questiontype');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$questiontype = Questiontypes::findOrFail($id);
		return view('questiontype.show', compact('questiontype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$questiontype = Questiontypes::findOrFail($id);
		return view('questiontype.edit', compact('questiontype'));
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
		$questiontype = Questiontypes::findOrFail($id);
		$questiontype->update($request->all());
		return redirect('questiontype');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Questiontypes::destroy($id);
		return redirect('questiontype');
	}

}
