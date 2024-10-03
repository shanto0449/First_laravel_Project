<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function addBlog(Request $request)

    {
        // $request->validate(rules: [
        //     'title' => 'required | min:50' ,
        //     'description'=>'min:150|max:300|nullable',
        //     'image'=>'requirded|image|mimes:jpg,png,svg|max:2048|min:1024'


        // ]);
        // return $request->input();
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image = $request->file('image')->storeAs('images', $request->image->getClientOriginalName(), 'public');
        $blog->description = $request->description;
        $blog->save();
        if ($blog) {
            return redirect(to: 'list');
        } else {
            return "Blog not submit";
        }
    }

    function list()
    {
        $blogData = Blog::all();
        return view('list-blog', ['blogs' => $blogData]);

    }

    function delete($id)
    {
        $isDeleted = Blog::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }

    function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit', ['data' => $blog]);
    }

    function editBlog(Request $request, $id)
    {
        // $request->validate([
        //     'file' => 'required'
        // ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->image = $request->file('image')->storeAs('images', $request->image->getClientOriginalName(), 'public');
        $blog->description = $request->description;
        $blog->save();
        if ($blog) {
            return redirect('list');
        } else {
            return "Update blog fail!";
        }

    }

    function viewBlog($id)
    {
        $blogData = Blog::find($id);
        return view('view', ['blog' => $blogData]);
    }



}
