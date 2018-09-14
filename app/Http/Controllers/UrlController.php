<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrlApi;

class UrlController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

public function index() {
        return response()->json(UrlApi::get());
    }

public function store(Request $request)
    {
        return response()->json(UrlApi::create($request->all()));
    }

public function destroy($id)
    {
        return response()->json(UrlApi::destroy($id));
    }
}
