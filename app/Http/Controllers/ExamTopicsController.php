<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Examtopics;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExamTopicsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$examtopics = Examtopics::latest()->get();
		return view('examtopics.index', compact('examtopics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('examtopics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Examtopics::create($request->all());
		return redirect('examtopics');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$examtopic = Examtopics::findOrFail($id);
		return view('examtopics.show', compact('examtopic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$examtopic = Examtopics::findOrFail($id);
		return view('examtopics.edit', compact('examtopic'));
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
		$examtopic = Examtopics::findOrFail($id);
		$examtopic->update($request->all());
		return redirect('examtopics');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Examtopics::destroy($id);
		return redirect('examtopics');
	}

}
