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
     * Display a portofolio page.
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        return view('/pages/portfolio');
    }

    /**
     * Display a different cours of technologies learning.
     *
     * @return \Illuminate\Http\Response
     */
    public function technologie()
    {
        return view('/pages/technologie');
    }

    /**
     * Display a different cours of managment learning.
     *
     * @return \Illuminate\Http\Response
     */
    public function managment()
    {
        return view('/pages/managment');
    }

    /**
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function conseil()
    {
        return view('/pages/conseil');
    }

    /**
     * Display a different partners of me.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('/pages/services');
    }

    /**
     * Display abaout page.
     *
     * @return \Illuminate\Http\Response
     */
    public function apropos()
    {
        return view('/pages/apropos');
    }
    
}


