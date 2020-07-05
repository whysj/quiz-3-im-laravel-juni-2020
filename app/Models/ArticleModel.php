<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function get_all(){
        $articles = DB::table('article')->get();
        return $articles;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_article = DB::table('article')->insert($data);
        return $new_article;
    }

    public static function find_by_id($id){
        $article = DB::table('article')->where('id', $id)->first();
        return $article;
    }

    public static function update($id, $request){
        $article = DB::table('article')->where('id', $id)->update([
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tag' => $request["tag"],
            ]);
            return $article;
    }

    public static function destroy($id){
        $deleted = DB::table('article')->where('id', $id)->delete();
        return $deleted;
    }

}


?>