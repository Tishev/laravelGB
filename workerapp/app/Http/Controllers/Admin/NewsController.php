<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Queries\CategoriesQueryBuilder;
use App\Queries\NewsQueryBuilder;
use App\Queries\QueryBuilder;
use App\Http\Requests\news\store;
use App\Http\Requests\news\update;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\Contracts\Upload;
use App\Services\UploadService;

class NewsController extends Controller
{

    protected QueryBuilder $categoriesQueryBuilder;

    protected QueryBuilder $newsQueryBuilder;


    public function __construct(CategoriesQueryBuilder $categoriesQueryBuilder, NewsQueryBuilder $newsQueryBuilder)
    {
        $this->categoriesQueryBuilder = $categoriesQueryBuilder;
        $this->newsQueryBuilder = $newsQueryBuilder;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.news.index', [
            'newsList' => $this->newsQueryBuilder->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.news.create', [
            'categories' => $this->categoriesQueryBuilder->getAll(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request) 
    {


        $news = News::create($request->validated());
        if ($news) {
            
                $news->categories()->attach($request->getCategories()); 

                return \redirect()->route('admin.news.index')->with('success', __('News has been create'));
            
        }

        return \back()->with('error', 'News has not been create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, News $news): RedirectResponse

    {
        $news = $news->fill($request->validated());
        if ($news->save()) {
            $news->categories()->sync($request->getCategories());
            return \redirect()->route('admin.news.index')->with('success', __('News has been updated'));
        }

        return \back()->with('error', 'News has not been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
