<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
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
        return response()->json(Category::get());
    }

public function store(Request $request)
    {
        return response()->json(Category::create($request->all()));
    }

public function destroy($id)
    {
        return response()->json(Category::destroy($id));
    }
}
