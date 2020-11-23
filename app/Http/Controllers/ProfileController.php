<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $profiles = Profile::latest()->paginate(5);

        return view('admin.pages.profile.index', ['profiles' => $profiles]);
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
        return view('admin.pages.profile.create', ['categories' => $categories, 'tags' => $tags]);
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
            'proTitulo' => 'required',
            'slug' => 'required|unique:profiles',
        ]);

        if ($request->hasFile('proImagem')) {
            $imageName = $request->proImagem->store('public');
        }else{
            $imageName = null;
        }

        $profile = new Profile;
        $profile->title            = $request->proTitulo;
        $profile->subtitle         = $request->proSubTitulo;
        $profile->author           = $request->proAutor;
        $profile->text             = $request->proTexto;
        $profile->embed_link       = $request->proLink;
        $profile->slug             = $request->slug;
        $profile->image            = $imageName;
        $profile->image_caption    = $request->proImgLegenda;
        $profile->publish          = isset($request->proPublicacao) ? 1 : 0;
        $profile->likes            = '0';
        $profile->dislikes         = '0';
        $profile->save();

        $profile->tags()->sync($request->tags);
        $profile->categories()->sync($request->categories);

        return redirect()->route('profiles')->with('message', 'Perfil cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.profile.edit',compact('tags','categories', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $request->validate([
            'proTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('proImagem')) {
            $imageName = $request->proImagem->store('public');
        }else{
            $imageName = $profile->image;
        }


        $profile->title            = $request->proTitulo;
        $profile->author           = $request->proAutor;
        $profile->text             = $request->proTexto;
        $profile->embed_link       = $request->proLink;
        $profile->slug             = $request->slug;
        $profile->image            = $imageName;
        $profile->image_caption    = $request->proImgLegenda;
        $profile->publish          = isset($request->proPublicacao) ? 1 : 0;
        $profile->save();

        $profile->tags()->sync($request->tags);
        $profile->categories()->sync($request->categories);

        return redirect()->route('profiles')->with('message', 'Perfil cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profiles')->with('alert-success','Perfil foi excluído com sucesso!');
    }
}
