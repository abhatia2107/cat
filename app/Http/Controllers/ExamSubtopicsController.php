<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Examsubtopics;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExamSubTopicsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$examsubtopics = Examsubtopics::latest()->get();
		return view('examsubtopics.index', compact('examsubtopics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('examsubtopics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Examsubtopics::create($request->all());
		return redirect('examsubtopics');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$examsubtopic = Examsubtopics::findOrFail($id);
		return view('examsubtopics.show', compact('examsubtopic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$examsubtopic = Examsubtopics::findOrFail($id);
		return view('examsubtopics.edit', compact('examsubtopic'));
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
		$examsubtopic = Examsubtopics::findOrFail($id);
		$examsubtopic->update($request->all());
		return redirect('examsubtopics');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Examsubtopics::destroy($id);
		return redirect('examsubtopics');
	}

}
