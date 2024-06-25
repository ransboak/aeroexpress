<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    //FRONTEND
    public function index(){
        return view('frontend.pages.index');
    }
    public function aboutUs(){
        return view('frontend.pages.about-us');
    }
    public function services(){
        return view('frontend.pages.services');
    }
    public function track(){
        return view('frontend.pages.track');
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function contactUs(){
        return view('frontend.pages.contact-us');
    }
    
    public function requestQuote(){
        return view('frontend.pages.request-quote');
    }

    //BACKEND
    public function shipments(){
        $shipments = Shipment::with(['user', 'packages'])->latest()->get();
        return view('backend.pages.shipments', compact('shipments'));
    }
    public function packages(){
        return view('backend.pages.packages');
    }
    public function invoice(){
        return view('backend.pages.invoice');
    }
}
