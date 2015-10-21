<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//		$blogs=Blog::all();
		$blogs = Blog::latest()->paginate(5);
//		dd($blogs->first()->users());
		return view('blog.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, Blog::$rules);
		$data=$request->all();
		if($request->hasFile('photo')) {
			$data['photo']=1;
		}
		else{
			$data['photo']=0;
		}
		$data['user_id']=Auth::id();
//		dd($data);
		$blog=Blog::create($data);
		if($request->hasFile('photo'))
		{
			$image = $request->file('photo');
//			$filename  = $blog->id. '.' . $image->getClientOriginalExtension();
			$filename  = $blog->id. '.jpg';

			$path = public_path('assets\images\blog\\' . $filename);

			Image::make($image->getRealPath())->encode('jpg')->save($path);
		}
		return redirect('blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);
		return view('blog.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::findOrFail($id);
		return view('blog.edit', compact('blog'));
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
		$blog = Blog::findOrFail($id);
		$blog->update($request->all());
		return redirect('blog');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Blog::destroy($id);
		return redirect('blog');
	}

}
