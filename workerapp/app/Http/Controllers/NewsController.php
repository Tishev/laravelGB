<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class NewsController extends Controller
{
private $news = [
[
'id' => 1,
'title' => 'Новость',
'inform' => 'Новость 1 Тут подробно о ней',
'isPrivate'=> true,
],
[
'id' => 2,
'title' => 'Новость2',
'inform' => 'Новость 2 Тут подробно о ней',
'isPrivate'=> false,
]

];

public function news(){
return view('news', ['news'=>$this->news]);
}


}
