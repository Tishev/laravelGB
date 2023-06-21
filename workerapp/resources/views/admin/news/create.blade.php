@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb2 mb-3">
        <h2 class="h2">Добавить новость</h2>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
        
    
    <form method="post" action="{{ route('admin.news.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input 
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title') }}" />
            </div>
            <div class="form-group">
                <label for="author">Aвтор</label>
                <input 
                type="text"
                name="author"
                id="author"
                class="form-control"
                value="{{ old('author') }}" />
            </div>
             <div class="form-group">
                <label for="image">Изображение</label>
                <input 
                type="file"
                name="image"
                id="image"
                class="form-control" />
            </div>
            <div class="form-group">
                <label for="status">Статус</label>
                <select name="status"
                id="status"
                class="form-control">
                    <option @if (old('status') === 'DRAFT') 
                        selected
                    @endif >DRAFT</option>
                    <option @if (old('status') === 'ACTIVE') 
                        selected
                    @endif >ACTIVE</option>
                    <option @if (old('status') === 'BLOCKED') 
                        selected
                    @endif >BLOCKED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
     </form>
       
    
@endsection