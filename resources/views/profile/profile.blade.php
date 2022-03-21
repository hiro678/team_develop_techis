@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="registerhead">
          <div class="card-header">
            <h2>{{ __('ユーザー情報') }}</h2>
          </div>
        </div>
        <div class="card-body">
          <div class="row m-3">
            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('名前') }}</b></label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
          </div>
          <div class="row m-3">
            <label for="email" class="col-md-4 col-form-label text-md-end"><b>{{ __('メールアドレス') }}</b></label>
            <div class="col-md-6">
              <input id="email" type="text" class="form-control" name="name" value="{{ $user->email }}">
            </div>
          </div>
          <div class="row m-3">
            <div class="col-md-6 offset-md-4">
              <a href="/profile.edit/{{$user->id}}"><button class="btn btn-primary">{{ __('ユーザー情報編集') }}</button></a>
            </div>
          </div>
          <div class="row m-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="/home"><button type="submit" class="btn btn-link"><b>ホームへ戻る</b></button></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection