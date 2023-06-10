<h1></h1>
@forelse($news as $item)
    <h2>
        <a href="/news/{{$item['id']}}">
            {{$item['title']}}
        </a>
    </h2>
    <div{{$item['inform']}}</div>
    <hr>
@empty
    <p>Нет новостей</p>
@endforelse
