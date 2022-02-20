@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>持ち物を編集・削除する</h2>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('item.update',['id'=>$item->id])}}" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        <b>名称</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="name" id="name" class="form-control" type="text" value="{{$item->name}}">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="amount" class="col-md-4 col-form-label text-md-end">
                                        <b>購入量</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="amount" id="amount" type="number" class="form-control" value="{{$item->amount}}" min="0" max="100" step="1">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bough_at" class="col-md-4 col-form-label text-md-end">
                                        <b>購入日</b>
                                    </label>
                                        <div class="col-md-6">
                                            <!-- <input name="bought_at" id="bought_at" type="yyyy/MM/dd H:mm:ss" class="form-control" name="date" value="{{$item->bought_at}}" > -->
                                            <input type="date">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image_name" class="col-md-4 col-form-label text-md-end">
                                        <b>画像</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="image_name" id="image_name" class="form-control" type="file" id="formFile" value="">
                                        </div>
                                        <div class="item">
                                            <img class="d-block mx-auto" src="{{ Storage::url($item->image_name) }}" alt="" width="150px" height="150px">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="boughat" class="col-md-4 col-form-label text-md-end">
                                        <b>アラート</b>
                                    </label>
                                        <div class="col-md-6">
                                            <!-- <input name="alert" id="alert" class="form-control" type="text" value="{{$item->alert}}"> -->
                                            <select class="form-control" name="alert" id="alert" value="{{$item->alert}}">
                                                <option value="0">なし</option>
                                                <option value="1">あり</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="comment" class="col-md-4 col-form-label text-md-end">
                                        <b>備考</b>
                                    </label>
                                        <div class="col-md-6">
                                            <input name="comment" id="comment" class="form-control" type="text" value="{{$item->comment}}">
                                        </div>
                                </div>
                                
                                <div class="d-grid gap-2 col-2 mx-auto">
                                    <button class="btn btn-primary" type="submit">編集</button>
                                </div>
                        </form>
                        <br>
                        <form method="POST" action="{{route('item.delete',['id'=>$item->id])}}">
                            @csrf
                            <div class="d-grid gap-2 col-2 mx-auto" id="button">
                                <button class="btn btn-secondary" type="submit">削除</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
