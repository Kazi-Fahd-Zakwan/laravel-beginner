<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        // Model : Singular
        // Service

        // Table : Plural
        // services

        $services = \App\Models\Service::all();

        return view('service.index', compact('services'));
    }

    public function store(){

        \App\Models\Service::create(request()->validate([
            'name' => 'required | min:5 | max:10'
        ]));

        return redirect()->back();

    }
}
