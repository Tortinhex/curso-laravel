<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use CodeCommerce\Category;

class WelcomeController extends Controller
{
	private $categories;

	public function __construct(Category $category){
		$this->middleware('guest');
		$this->categories = $category;
	}

    public function index()
    {
    	return view('welcome');
    }

    public function exemplo()
    {
    	$categories = $this->categories->all();
    	return view('exemplo', compact('categories'));
    }
}
