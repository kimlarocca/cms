<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        return Page::all();
    }

    public function show(Page $page)
    {
        return $page;
    }

    public function store(Request $request)
    {
        $page = Page::create($request->all());
        return response()->json($page, 201);
    }

    public function update(Request $request, Page $page)
    {
        $page->update($request->all());
        return response()->json($page, 200);
    }

    public function delete(Page $page)
    {
        $page->delete();
        return response()->json(null, 204);
    }
}
