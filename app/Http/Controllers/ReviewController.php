<?php

namespace App\Http\Controllers;

use App\Review;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
        $reviews = Review::latest()->paginate(5);

        return view('admin.pages.review.index', ['reviews' => $reviews]);
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
        return view('admin.pages.review.create', ['categories' => $categories, 'tags' => $tags]);
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
            'criTitulo' => 'required',
            'slug' => 'required|unique:reviews',
        ]);

        if ($request->hasFile('criImagem')) {
            $imageName = $request->criImagem->store('public');
        }else{
            $imageName = null;
        }

        $review = new Review;
        $review->title            = $request->criTitulo;
        $review->author           = $request->criAutor;
        $review->text             = $request->criTexto;
        $review->slug             = $request->slug;
        $review->image            = $imageName;
        $review->image_caption    = $request->criImgLegenda;
        $review->publish          = isset($request->criPublicacao) ? 1 : 0;
        $review->likes            = '0';
        $review->dislikes         = '0';
        $review->rating           = $request->criNota;
        $review->save();

        $review->tags()->sync($request->tags);
        $review->categories()->sync($request->categories);

        return redirect()->route('reviews')->with('message', 'Crítica cadastrada com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.review.edit',compact('tags','categories', 'review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $request->validate([
            'criTitulo' => 'required',
            'slug' => 'required',
        ]);

        if ($request->hasFile('criImagem')) {
            $imageName = $request->criImagem->store('public');
        }else{
            $imageName = $review->image;
        }


        $review->title            = $request->criTitulo;
        $review->author           = $request->criAutor;
        $review->text             = $request->criTexto;
        $review->slug             = $request->slug;
        $review->image            = $imageName;
        $review->image_caption    = $request->criImgLegenda;
        $review->publish          = isset($request->criPublicacao) ? 1 : 0;
        $review->rating           = $request->criNota;
        $review->save();

        $review->tags()->sync($request->tags);
        $review->categories()->sync($request->categories);

        return redirect()->route('reviews')->with('message', 'Crítica cadastrada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('reviews')->with('alert-success','Crítica foi excluída com sucesso!');
    }
}
