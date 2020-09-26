<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class InterviewController extends Controller
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
        $interviews = Interview::latest()->paginate(5);

        return view('admin.pages.interview.index', ['interviews' => $interviews]);
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
        return view('admin.pages.interview.create', ['categories' => $categories, 'tags' => $tags]);
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
            'entTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('entImagem')) {
            $imageName = $request->entImagem->store('public');
        }else{
            $imageName = null;
        }

        $interview = new Interview;
        $interview->title            = $request->entTitulo;
        $interview->subtitle         = $request->entSubTitulo;
        $interview->author           = $request->entAutor;
        $interview->text             = $request->entTexto;
        $interview->slug             = $request->slug;
        $interview->image            = $imageName;
        $interview->image_caption    = $request->entImgLegenda;
        $interview->publish          = isset($request->entPublicacao) ? 1 : 0;
        $interview->likes            = '0';
        $interview->dislikes         = '0';
        $interview->save();

        $interview->tags()->sync($request->tags);
        $interview->categories()->sync($request->categories);

        return redirect()->route('interviews')->with('message', 'Entrevista cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interview = Interview::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.interview.edit',compact('tags','categories', 'interview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $interview = Interview::findOrFail($id);
        $request->validate([
            'entTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('entImagem')) {
            $imageName = $request->entImagem->store('public');
        }else{
            $imageName = $interview->image;
        }


        $interview->title            = $request->entTitulo;
        $interview->subtitle         = $request->entSubTitulo;
        $interview->author           = $request->entAutor;
        $interview->text             = $request->entTexto;
        $interview->slug             = $request->slug;
        $interview->image            = $imageName;
        $interview->image_caption    = $request->entImgLegenda;
        $interview->publish          = isset($request->entPublicacao) ? 1 : 0;
        $interview->save();

        $interview->tags()->sync($request->tags);
        $interview->categories()->sync($request->categories);

        return redirect()->route('interviews')->with('message', 'Entrevista cadastrada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interview = Interview::findOrFail($id);
        $interview->delete();
        return redirect()->route('interviews')->with('alert-success','Entrevista foi excluída com sucesso!');
    }
}
