<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Questionoptions;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuestionOptionsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questionoptions = Questionoptions::latest()->get();
		return view('questionoptions.index', compact('questionoptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('questionoptions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Questionoptions::create($request->all());
		return redirect('questionoptions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$questionoption = Questionoptions::findOrFail($id);
		return view('questionoptions.show', compact('questionoption'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$questionoption = Questionoptions::findOrFail($id);
		return view('questionoptions.edit', compact('questionoption'));
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
		$questionoption = Questionoptions::findOrFail($id);
		$questionoption->update($request->all());
		return redirect('questionoptions');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Questionoptions::destroy($id);
		return redirect('questionoptions');
	}

}
