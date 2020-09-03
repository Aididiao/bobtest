<?php

namespace App\Http\Controllers;


use App\Models\Index;

class SearchController extends Controller
{
    function index() {

            $query = 'il-2'; // <-- Change the query for testing.

        $articles = Index::search($query)->paginate(15);
//        return json_decode($articles);
        return view('search.index',array('data'=>$articles));
    }
    function getdata() {

            $query = 'il-2'; // <-- Change the query for testing.

        $articles = Index::search($query)->get();

        return json_decode($articles);

    }
}
