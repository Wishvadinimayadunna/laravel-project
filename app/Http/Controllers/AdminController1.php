<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class AdminController1 extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }

    // add Post
    public function add_post(Request $request)
    {
        $user=Auth()->user();

        $user_id=$user->id;

        $name=$user->name;

        $usertype=$user->usertype;

        $post=new Post;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->post_status = 'active';

        $post->user_id = $user_id;                  //first-post table //second- user table

        $post->name = $name;

        $post->usertype = $usertype;
        
        //keeping the image in pulic folder
        $image=$request->image;

        if($image)
        {
         $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);

        //responsille for storing the image in database
        $post->image=$imagename;
        }
        
        
        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');
    }

    public function show_post()
    {
        $post=Post::all();

        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        $post=Post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Deleted Successfully');
    }

    public function edit_page($id)
    {
        $post=Post::find($id);

        return view('admin.edit_page',compact('post'));
    }

    public function update_post(Request $request,$id)
    {
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
    
            
            $data->image=$imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function create_post()
    {
        return view('home.create_post');
    }
}
