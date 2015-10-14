<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Questionstatuses;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuestionStatusController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questionstatuses = Questionstatuses::latest()->get();
		return view('questionstatus.index', compact('questionstatuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('questionstatus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Questionstatuses::create($request->all());
		return redirect('questionstatus');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$questionstatus = Questionstatuses::findOrFail($id);
		return view('questionstatus.show', compact('questionstatus'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$questionstatus = Questionstatuses::findOrFail($id);
		return view('questionstatus.edit', compact('questionstatus'));
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
		$questionstatus = Questionstatuses::findOrFail($id);
		$questionstatus->update($request->all());
		return redirect('questionstatus');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Questionstatuses::destroy($id);
		return redirect('questionstatus');
	}

}
