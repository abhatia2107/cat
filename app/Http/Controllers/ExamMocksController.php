<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exammocks;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExamMocksController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exammocks = Exammocks::latest()->get();
		return view('exammocks.index', compact('exammocks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('exammocks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Exammocks::create($request->all());
		return redirect('exammocks');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exammock = Exammocks::findOrFail($id);
		return view('exammocks.show', compact('exammock'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exammock = Exammocks::findOrFail($id);
		return view('exammocks.edit', compact('exammock'));
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
		$exammock = Exammocks::findOrFail($id);
		$exammock->update($request->all());
		return redirect('exammocks');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Exammocks::destroy($id);
		return redirect('exammocks');
	}

}
