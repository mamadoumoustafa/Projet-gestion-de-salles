<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hcontrolleur extends Controller
{
    
	  public function index()
	{
		return view('welcome');
	}
    public function home()
	{
		return view('page2');
	}
	    public function show()
	{
		return view('login');
	}
		    public function pages()
	{
		return view('page1');
	}
}
