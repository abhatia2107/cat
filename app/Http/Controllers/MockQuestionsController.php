<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mockquestions;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MockQuestionsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mockquestions = Mockquestions::latest()->get();
		return view('mockquestions.index', compact('mockquestions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mockquestions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Mockquestions::create($request->all());
		return redirect('mockquestions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mockquestion = Mockquestions::findOrFail($id);
		return view('mockquestions.show', compact('mockquestion'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mockquestion = Mockquestions::findOrFail($id);
		return view('mockquestions.edit', compact('mockquestion'));
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
		$mockquestion = Mockquestions::findOrFail($id);
		$mockquestion->update($request->all());
		return redirect('mockquestions');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mockquestions::destroy($id);
		return redirect('mockquestions');
	}

}
