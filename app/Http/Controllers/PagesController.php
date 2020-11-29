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
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function technologie()
    {
        dd("technologie");
        return view('/pages/formation_technologie');
    }

    /**
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function managment()
    {
        dd("managment");
        return view('/pages/formation_managment');
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
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function partenaires()
    {
        return view('/pages/partenaires');
    }

    /**
     * Display a different articles of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function apropos()
    {
        return view('/pages/apropos');
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
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('/pages/services');
    }

    

    

    

    
    
}


