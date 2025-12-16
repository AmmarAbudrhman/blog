<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(): View
    {

        $postFromDb = Post::with('user')->get();

        return view('posts.index',['posts' => $postFromDb]);
    }
    public function create(): View
    {
        $Users=User::all();
        return view('posts.create', ['users' => $Users]);
    }

    public function store(Request $request)
    {
         request()->validate([
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:10',
            'post_creator' => 'nullable|exists:users,id',
        ]);
        $data=$request->all();
        $title=$request->title;
        $description=$request->description;
        $post_creator=$request->post_creator;

        // $post=new Post();
        // $post->title=$title;
        // $post->description=$description;
        // $post->user_id=$post_creator;
        // $post->save();

        Post::create([
            'title'=>$title,
            'description'=>$description,
            'user_id'=>$post_creator,
            'Author'=>'Ammar'
            ]);

    

        return redirect()->route('posts.index')->with('success','');
    }
    public function show(Post $post): View
    {
        
    //    $singlePostFromDB=Post::findOrFail($post->id);
    //    if(is_null($singlePostFromDB)){
    //      abort(404);
    //    }

       // dd($singlePostFromDB);
       //$singlePostFromDB = Post::where('id', $postId)->first();
       //$singlePostFromDB = Post::where($postId)->get();

        return view('posts.show', ['post'=> $post]);
    }
    public function edit(Post $post): View
    {
             request()->validate([
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:10',
            'post_creator' => 'nullable|exists:users,id',
        ]);
        $Users=User::all();

        return view('posts.edit', ['users' => $Users, 'post' => $post]);
    }
    public function delete($id)
    {
        // Placeholder for delete functionality
        return redirect()->route('posts.index')->with('status', 'Post deleted successfully!');
    }
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();

        // Placeholder for destroy functionality
        return redirect()->route('posts.index')->with('status', 'Post deleted successfully!');
    }
    public function update(Request $request, $postId)
    {
        $data=$request->all();
        $title=$request->title;
        $description=$request->description;
        $post_creator=$request->post_creator;

        // $singlePostFromDB=Post::findOrFail($postId);
        // $singlePostFromDB->title=$title;
        // $singlePostFromDB->description=$description;
        // $singlePostFromDB->user_id=$post_creator;

        $singlePostFromDB=Post::find($postId);
        $singlePostFromDB->update([
            'title'=>$title,
            'description'=>$description,
            'user_id'=>$post_creator
        ]);
        // $singlePostFromDB->save();

        
        return to_route('posts.show', ['post' => $postId])->with('status', 'Post updated successfully!');
    }
}
