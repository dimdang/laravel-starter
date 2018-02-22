<?php

namespace App\Http\Controllers\Admin;

use App\model\user\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tag = tag::first();
        //$tags = tag::all();
        //$data['tag'] = tag::first();
        //return view('admin.tag.show', $data, compact('tags', 'tag'), ['tags' => $tags, 'tag' => $tag]);

        $data['tags'] = tag::all();

        return view('admin.tag.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'slug' => 'required'
        ]);

      Tag::create($data);
//        if use new follow style blow
//        $tag = new Tag();
//        $tag->fill($data);
//        $tag->save();

        return redirect(route('tag.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $tag['tag'] = Tag::where('id', $id)->first();
        return view('admin.tag.edit', $tag);
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
        $data = $this->validate($request, [
            'name' => 'required',
            'slug' => 'required'
        ]);

        $tag = Tag::find($id);
        $tag->fill($data);
        $tag->save();


        return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::where('id', $id)->delete();
        return redirect()->back();
    }
}
