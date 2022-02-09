@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card">
                <h3 class="card-header">カテゴリーを編集・削除する</h3>
                
                <div class="card-body">
                    <form action="{{ url('category.update') }}" method="post">
                    @csrf 
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>カテゴリー名</b></label>
                            <div class="col-md-6">
                                <input class="form-control" type="hidden" name="id" value="{{ $category->id }}">
                                <input class="form-control" type="text" name="name" value="{{ $category->name }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit">編集</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <!-- 削除ボタン -->
                        <form action="{{ url('category.delete') . '/' . $category->id }}" method="post">
                        @csrf
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-secondary" type="submit" id="delete-category-{{ $category->id }}">削除</button>  
                                </div>
                            </div>
                        </form>
                </div>
            <div>
        </div>
    </div>   
</div>
@endsection