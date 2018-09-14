<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrlApi;
use Log;

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
		$url = new UrlApi;
		$url->href = $request->href;
		$url->category_id= $request->category_id;
		$url->save();
        return response()->json($url);
    }

public function destroy($id)
    {
        return response()->json(UrlApi::destroy($id));
    }
}
