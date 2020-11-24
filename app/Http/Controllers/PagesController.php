<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('/pages/index');
    }

    /**
     * Display a listing of the traning.
     *
     * @return \Illuminate\Http\Response
     */
    public function formation()
    {
    	return view('/pages.formation');
    }

    /**
     * Display a form contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
    	return view('/pages/contacter');
    }

    /**
     * Display a portofolio page.
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        return view('/pages/portfolio');
    }

    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('/pages/services');
    }

    /**
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        return view('/pages/blog');
    }
}


