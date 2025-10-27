<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest()->paginate();
        return view('list',['categories' => $categories]);

    }

    public function create(){

        return view('new');

    }

    public function store(Request $request){

        $request->validate([
                            'title' => 'required|unique:categories|min:3|max:30|alpha'
                        ], 
                        [
                            'required' => 'Title is empty.',
                            'alpha' => 'Only alphabet allowed.',
                            'min' => 'Title length atleast 3.',
                            'max' => 'Title length utmost 30.'
                        ]
        );
        $category = new Category;
        $category->title = trim($request->title);
        $category->save();
        return redirect('/categories')->withAdd('New Category Added');

    }

    public function edit($id){

        $category = Category::where('id',$id)->first();
        return view('edit',compact('category'));

    }

    public function update(Request $request, $id){

        $request->validate([
                            'title' => 'required|min:3|max:30|alpha'
                        ],
                        [
                            'required' => 'Title is empty.',
                            'alpha' => 'Only alphabet allowed.',
                            'min' => 'Title length atleast 3.',
                            'max' => 'Title length utmost 30.'
                        ]
        );
        $category = Category::where('id',$id)->first();
        $category->title = trim($request->title);
        $category->save();
        return redirect('/categories')->withUpdate('Category Updated');

    }

    public function delete($id){

        $category = Category::where('id',$id)->first();
        $category->delete();        
        return redirect('/categories')->withDel('Category Deleted');

    }
}
