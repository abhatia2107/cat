<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArticleController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show', 'news', 'blog', 'event', 'announcement']]);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest()->paginate(5);
		return view('article.index', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function news()
	{
		$articles = Article::where('category_id', 1)->paginate(5);
		return view('article.index', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function blog()
	{
		$articles = Article::where('category_id', 2)->paginate(5);
		return view('article.index', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function event()
	{
		$articles = Article::where('category_id', 3)->paginate(5);
		return view('article.index', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function announcement()
	{
		$articles = Article::where('category_id', 4)->paginate(5);
		return view('article.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories=Category::lists('category')->all();
		$tags=Tag::lists('tag')->all();
		array_unshift($categories,'');
		unset($categories[0]);
		array_unshift($tags,'');
		unset($tags[0]);
		return view('article.create', compact('categories', 'tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, Article::$rules);
		$data=$request->all();
		if($request->hasFile('photo')) {
			$data['photo']=1;
		}
		else{
			$data['photo']=0;
		}
		$data['user_id']=Auth::id();
		$article=Article::create($data);
		if($request->hasFile('photo'))
		{
			$image = $request->file('photo');
//			$filename  = $article->id. '.' . $image->getClientOriginalExtension();
			$filename  = $article->id. '.jpg';

			$path = public_path('assets\images\article\\' . $filename);

			Image::make($image->getRealPath())->encode('jpg')->save($path);
		}
		if(isset($data['tags']))
			$article->tag()->attach($data['tags']);
		return redirect('article');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::findOrFail($id);
		$articles = Article::where('category_id', $article->category_id)->take(3);
//		dd($articles->count());
		return view('article.show', compact('article', 'articles'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('article.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('article');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);
		return redirect('article');
	}

}
