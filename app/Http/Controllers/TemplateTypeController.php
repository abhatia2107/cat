<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Templatetypes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TemplateTypeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$templatetypes = Templatetypes::latest()->get();
		return view('templatetype.index', compact('templatetypes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('templatetype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Templatetypes::create($request->all());
		return redirect('templatetype');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$templatetype = Templatetypes::findOrFail($id);
		return view('templatetype.show', compact('templatetype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$templatetype = Templatetypes::findOrFail($id);
		return view('templatetype.edit', compact('templatetype'));
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
		$templatetype = Templatetypes::findOrFail($id);
		$templatetype->update($request->all());
		return redirect('templatetype');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Templatetypes::destroy($id);
		return redirect('templatetype');
	}

}
