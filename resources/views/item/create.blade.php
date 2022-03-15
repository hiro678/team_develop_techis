@extends('layouts.app')

@section('content')
<body>
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>持ち物を登録する</h2>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('item.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        <b>名称</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="name" id="name" class="form-control" type="text">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="amount" class="col-md-4 col-form-label text-md-end">
                                        <b>購入量</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="amount" id="amount" type="number" class="form-control" value="1" min="0" max="100" step="1">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bough_at" class="col-md-4 col-form-label text-md-end">
                                        <b>購入日</b>
                                    </label>
                                        <div class="col-md-6">
                                        <input name="bought_at" id="bought_at" class="form-control" type="date" value="<?php echo date('Y-m-d');?>" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image_name" class="col-md-4 col-form-label text-md-end">
                                        <b>画像</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="image_name" id="image_name" class="form-control" type="file" id="formFile">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="boughat" class="col-md-4 col-form-label text-md-end">
                                        <b>アラート</b>
                                    </label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="alert"id="alert">
                                                <option value="0" selected> なし</option>
                                                <option value="1">あり</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="comment" class="col-md-4 col-form-label text-md-end">
                                        <b>備考</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="comment" id="comment" class="form-control" type="text" value="なし">
                                        </div>
                                </div>
                                <div class="d-grid gap-2 col-2 mx-auto">
                                    <input class="btn btn-primary" type="submit" value="登録">
                                </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection