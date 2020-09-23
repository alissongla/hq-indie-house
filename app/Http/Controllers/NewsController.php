<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(5);

        return view('admin.pages.news.index', ['news' => $news]);
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
        return view('admin.pages.news.create', ['categories' => $categories, 'tags' => $tags]);
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
            'notTitulo' => 'required',
            'slug' => 'required|unique:news',
        ]);

        if ($request->hasFile('notImagem')) {
            $imageName = $request->notImagem->store('public');
        }else{
            $imageName = null;
        }

        $news = new News;
        $news->title            = $request->notTitulo;
        $news->author           = $request->notAutor;
        $news->text             = $request->notTexto;
        $news->slug             = $request->slug;
        $news->image            = $imageName;
        $news->image_caption    = $request->notImgLegenda;
        $news->publish          = isset($request->notPublicacao) ? 1 : 0;
        $news->likes            = '0';
        $news->dislikes         = '0';
        $news->save();

        $news->tags()->sync($request->tags);
        $news->categories()->sync($request->categories);

        return redirect()->route('news')->with('message', 'Notícia cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.news.edit',compact('tags','categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'notTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('notImagem')) {
            $imageName = $request->notImagem->store('public');
        }else{
            $imageName = null;
        }

        $news = News::findOrFail($id);
        $news->title            = $request->notTitulo;
        $news->author           = $request->notAutor;
        $news->text             = $request->notTexto;
        $news->slug             = $request->slug;
        $news->image            = $imageName;
        $news->image_caption    = $request->notImgLegenda;
        $news->publish          = isset($request->notPublicacao) ? 1 : 0;
        $news->save();

        $news->tags()->sync($request->tags);
        $news->categories()->sync($request->categories);

        return redirect()->route('news')->with('message', 'Notícia cadastrada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news')->with('alert-success','Notícia foi excluída com sucesso!');
    }
}
