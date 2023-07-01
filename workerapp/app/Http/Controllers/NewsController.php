<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatus;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Queries\NewsQueryBuilder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;



class NewsController extends Controller
{

    public function index(NewsQueryBuilder $newsQueryBuilder): View
    {
       $news = $newsQueryBuilder->getActiveNews();
        return view('news.index', ['news' => $news]);

    }

    public function show(int $id)
    {
       $news = News::findOrFail($id);
        return view('news.show', ['newsItem' => $news]);
    }
// private $news = [
// [
// 'id' => 1,
// 'title' => 'Новость',
// 'inform' => 'Новость 1 Тут подробно о ней',
// 'isPrivate'=> true,
// ],
// [
// 'id' => 2,
// 'title' => 'Новость2',
// 'inform' => 'Новость 2 Тут подробно о ней',
// 'isPrivate'=> false,
// ]

// ];

// public function news(){
// return view('news', ['news'=>$this->news]);
// }


}
