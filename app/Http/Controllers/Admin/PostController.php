<?php

namespace App\Http\Controllers\Admin;

use App\model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::all();
        return view('admin.post.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        if ($request->hasFile('image')){
            //$imageName = $request->image->getClientOriginalname();
            $imageName = $request->image->store('public/image');
        }

        $post = new Post();
        $post->image = $imageName;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post['post'] = Post::where('id', $id)->first();
        return view('admin.post.edit', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        $post = Post::find($id);
        $post->fill($data);
        $post->save();


        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
