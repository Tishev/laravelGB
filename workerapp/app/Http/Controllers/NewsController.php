<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 


class NewsController extends Controller
{

    public function index() 
    {
        $news = $this->getNews();
        return view('news.index', [
            'newsList' => $news
        ]);

    }

    public function show(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', [
            'news' => $news
        ]);
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
