<?php
namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:create-news|store-news|news-list', ['only' => ['Show']]);
         $this->middleware('permission:create-news', ['only' => ['Index','Show']]);
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function Index()
    {
        $languages = Language::all();
        return view('News.addNews', compact('languages'));
    }
    public function Show()
    {

        return view('News.addNews',);
    }
}
