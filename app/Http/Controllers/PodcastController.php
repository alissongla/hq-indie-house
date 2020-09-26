<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(5);

        return view('admin.pages.podcast.index', ['podcasts' => $podcasts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.pages.podcast.create', ['categories' => $categories, 'tags' => $tags]);
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
            'podTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('podImagem')) {
            $imageName = $request->podImagem->store('public');
        }else{
            $imageName = null;
        }

        $podcast = new Podcast;
        $podcast->title            = $request->podTitulo;
        $podcast->subtitle         = $request->podSubTitulo;
        $podcast->author           = $request->podAutor;
        $podcast->slug             = $request->slug;
        $podcast->embed_link       = $request->podLink;
        $podcast->image            = $imageName;
        $podcast->image_caption    = $request->podImgLegenda;
        $podcast->publish          = isset($request->podPublicacao) ? 1 : 0;
        $podcast->likes            = '0';
        $podcast->dislikes         = '0';
        $podcast->save();

        $podcast->tags()->sync($request->tags);
        $podcast->categories()->sync($request->categories);

        return redirect()->route('podcasts')->with('message', 'Podcast cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $podcast = Podcast::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.podcast.edit',compact('tags','categories', 'podcast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $podcast = Podcast::findOrFail($id);
        $request->validate([
            'podTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('podImagem')) {
            $imageName = $request->podImagem->store('public');
        }else{
            $imageName = $podcast->image;
        }


        $podcast->title            = $request->podTitulo;
        $podcast->subtitle         = $request->podSubTitulo;
        $podcast->author           = $request->podAutor;
        $podcast->slug             = $request->slug;
        $podcast->embed_link       = $request->podLink;
        $podcast->image            = $imageName;
        $podcast->image_caption    = $request->podImgLegenda;
        $podcast->publish          = isset($request->podPublicacao) ? 1 : 0;
        $podcast->likes            = '0';
        $podcast->dislikes         = '0';
        $podcast->save();

        $podcast->tags()->sync($request->tags);
        $podcast->categories()->sync($request->categories);

        return redirect()->route('podcasts')->with('message', 'Podcast cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $podcast = Podcast::findOrFail($id);
        $podcast->delete();
        return redirect()->route('podcasts')->with('alert-success','Podcast foi excluído com sucesso!');
    }
}
