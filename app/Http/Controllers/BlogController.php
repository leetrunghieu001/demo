<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;

class BlogController extends Controller
{
    // public function blog_home()
    // {
    //     return view('pages.blog');
    // }


    public function add_blog()
    {
        return view('/pages.add_blog');
    }

    //add
    public function save_blog(Request $request)
    {
        $data = $request->all();
        $blog = new Blog;
        $blog->title = $data['title_blog'];
        $blog->content = $data['content_blog'];
        $blog->save();
        return redirect('/add_blog')->with('message', 'Add blog success');
    }

    //get all blog
    public function all_blog()
    {
        $all_blog  = Blog::OrderBy('id', 'DESC')->get();
        return view('pages.blog')->with('all_blog', $all_blog);
    }

    // Edit
    public function edit_blog($id)
    {
        $edit_blog = Blog::where('id', $id)->get();
        return view('pages.blog_detail')->with('edit_blog', $edit_blog);
    }

    // update
    public function update_blog($id, Request $request)
    {
        $data = $request->all();
        $blog = Blog::find($id);
        $blog->title = $data['blog_title'];
        $blog->content = $data['blog_content'];
        $blog->save();
        return redirect('/blog')->with('message', 'Update blog success');
    }

     // delete
     public function delete_blog($id)
     {
         $blog = Blog::find($id);
         $blog->delete();
         return redirect('/blog')->with('message', 'Delete blog success');
     }
}
