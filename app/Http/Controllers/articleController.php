<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    public function arti_home()
    {
        return view('article.articlehome');
    }
    public function q5()
    {
        $articles = DB::table('articles')->get();
        return view('article.q5', ['articles' => $articles]);
    }
    public function q6()
    {
        $articles = DB::table('articles')->get();
        $articledata = [];
        foreach ($articles as $article) {
            $articledata[] = [
                'description' => $article->description,
                'poids' => $article->poids,

            ];
        }
        return view('article.q6', ['articledata' => $articledata]);
    }
    public function q7()
    {
        $article1 = DB::table('articles')->first();
        return view('article.q7', ['article1' => $article1]);
    }
    public function q8()
    {
        //vert
        $articles = DB::table('articles')
            ->where('couleur', 'Vert')
            ->get();
        $vertdata = [];
        foreach ($articles as $article) {
            $vertdata[] = [
                'id' => $article->id,
                'description' => $article->description,

            ];
        }
        return view('article.q8', ['vertdata' => $vertdata]);
    }
    public function q9()
    {
        //verte + prix d'achat < 500
        $decs = DB::table('articles')
            ->where('couleur', 'vert')
            ->where('pirx_achat', '<', 500)
            ->pluck('description');

        return view('article.q9', ['decs' => $decs]);
    }

    public function q10()
    {
        //poids entre 200 et 300
        $artcls = DB::table('articles')
            ->whereBetween('poids', [200, 300])
            ->get();

            return view('article.q10', ['artcls' => $artcls]);
    }
    public function q11()
    {
        
        //count articles
        $count = DB::table('articles')
            ->count();

            return view('article.q11', ['count' => $count]);
    }
    public function q12()
    {
        
       //moyenne des prix d'achat
       $moy = DB::table('articles')
       ->avg('pirx_achat');
            return view('article.q12', ['moy' => $moy]);
    }

    ///////////////////////////////
    /*
    public function index()
    {
        $articles = DB::table('articles')->get();

        //des + poids Q 6
        $articledata = [];
        foreach ($articles as $article) {
            $articledata[] = [
                'description' => $article->description,
                'poids' => $article->poids,

            ];
        }

        //article 1
        $article1 = DB::table('articles')->first();

        //vert
        $articles = DB::table('articles')
            ->where('couleur', 'Vert')
            ->get();
        $vertdata = [];
        foreach ($articles as $article) {
            $vertdata[] = [
                'id' => $article->id,
                'description' => $article->description,

            ];
        }

        //verte + prix d'achat < 500
        $decs = DB::table('articles')
            ->where('couleur', 'vert')
            ->where('pirx_achat', '<', 500)
            ->pluck('description');

        //moyenne des prix d'achat
        $moy = DB::table('articles')
            ->avg('pirx_achat');

        //poids entre 200 et 300
        $artcls = DB::table('articles')
            ->whereBetween('poids', [200, 300])
            ->get();

        //count articles
        $count = DB::table('articles')
            ->count();

        return view('article', [
            'articles' => $articles,
            'articledata' => $articledata,
            'article1' => $article1,
            'vertdata' => $vertdata,
            'decs' => $decs,
            'moy' => $moy,
            'artcls' => $artcls,
            'count' => $count,

        ]);

    }
    */
}
