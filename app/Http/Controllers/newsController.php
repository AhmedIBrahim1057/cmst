<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Storage;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('backend.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
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
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_path = $image->store('news', ['disk' => 'public']);
        }

        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_path,
            'date' => $request->date,
        ]);
       
        return redirect()->route('news.index')
                        ->with('success','News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('backend.news.show', compact('news')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
        ]);

        $image = $request->file('image');
        if(!empty($image)){
            Storage::disk('public')->delete($news->image);
            $image_path = $image->store('news', ['disk' => 'public']);
            $news->image = $image_path;
            $news->save();
        } else{
            $news->fill( $request->except('image') );
            $news->save();
        }

        return redirect()->route('news.index')
                        ->with('success','News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.index')
                        ->with('success','News deleted successfully.');
    }
}
