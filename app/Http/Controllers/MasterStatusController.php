<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Masterstatuses;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MasterStatusController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$masterstatuses = Masterstatuses::latest()->get();
		return view('masterstatus.index', compact('masterstatuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('masterstatus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Masterstatuses::create($request->all());
		return redirect('masterstatus');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$masterstatus = Masterstatuses::findOrFail($id);
		return view('masterstatus.show', compact('masterstatus'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$masterstatus = Masterstatuses::findOrFail($id);
		return view('masterstatus.edit', compact('masterstatus'));
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
		$masterstatus = Masterstatuses::findOrFail($id);
		$masterstatus->update($request->all());
		return redirect('masterstatus');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Masterstatuses::destroy($id);
		return redirect('masterstatus');
	}

}
