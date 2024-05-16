<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }
   
    public function service()
    {
        return view('frontend.service');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    } public function pages()
    {
        return view('frontend.pages');
    } 
    public function news()
    {
        return view('frontend.news');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
    public function lang()
    {
        return view('frontend.lang');
    }
    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }
    
}
