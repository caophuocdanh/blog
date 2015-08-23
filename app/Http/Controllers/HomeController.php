<?php namespace App\Http\Controllers;

use App\Category;
use App\Article;

class HomeController extends Controller {


	public function index()
	{
		$categories = Category::all();
		$articles = Article::all();
		return view('home')->with('categories',$categories)->with('articles',$articles);
	}

}
