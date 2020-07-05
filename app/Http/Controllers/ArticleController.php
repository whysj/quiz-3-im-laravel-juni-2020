<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function create(){
        return view('layouts.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $new_articles = ArticleModel::save($request->all());
        return redirect('/article');
    }

    public function index(){
        $articles = ArticleModel::get_all();
        // dd($articles);
        return view('layouts.index', compact('articles'));
    }

    public function show($id){
        $article = ArticleModel::find_by_id($id);
        return view('layouts.show', compact('article'));
    }

    public function edit($id){
        $article = ArticleModel::find_by_id($id);
        return view('layouts.edit', compact('article'));
    }

    public function update($id, Request $request){
        $article = ArticleModel::update($id, $request->all());
        return redirect('/article');
    }

    public function destroy($id){
        $deleted = ArticleModel::destroy($id);
        return redirect('/article');
    }
}
