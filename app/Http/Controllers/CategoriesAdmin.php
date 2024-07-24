<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view( 'categories.admin.index', compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'categories.admin.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|min:8|max:128|unique:categories',
            'title' => 'required|min:8'
        ]);
        $data = $request->only(['slug', 'title', 'description']);
        Category::create($data);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category  = Category::findOrFail($id);
        return view('categories.admin.show', compact('category'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category  = Category::findOrFail($id);
//        dd($category);
        return view ( 'categories.admin.edit', compact('category') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => "required|min:8|max:128|unique:categories,slug,$id"
        ]);
        $category  = Category::findOrFail($id);
        $data = $request->only(['slug', 'title', 'description']);
        $category->update($data);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category  = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }

    public function trash(){
        $categories  = Category::onlyTrashed()->get();
        return view ( 'categories.admin.trash', compact('categories') );
    }

    public function restore($id){
        $category  = Category::onlyTrashed()->findOrFail($id);
        $category -> restore();
        return redirect()->route('categories.show', [ $category->id ] );
    }

    public function destroyForewer($id)
    {
        Category::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('categories.index');
    }


}
