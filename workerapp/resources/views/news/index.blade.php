@extends('layouts.main')
@section('content')
<div class="container">

  

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         @forelse ($news as $newsItem)
  
        <div class="col">


          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
                <p><strong><a href="{{ route('news.show', ['id' => $newsItem['id']]) }}">{{ $newsItem['title'] }}</a></strong></p>
              <p class="card-text">
                {!! $newsItem['description'] !!}
            </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a 
                  href="{{ route('news.show', ['id' => $newsItem['id']]) }}"  
                  type="button" 
                  class="btn btn-sm btn-outline-secondary">Подробнее</button>
                </div>
                <small class="text-body-secondary">{{ $newsItem['author']}} (<?=$newsItem['created_at']?>)</small>
              </div>
            </div>
          </div>
        </div>
      </div>
       @empty
    <h2>end news</h2>
            @endforelse
    </div>

@endsection

  




   