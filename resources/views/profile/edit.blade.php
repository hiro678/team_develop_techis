@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="registerhead">
                    <div class="card-header">
                        <h2>{{ __('ユーザー情報編集') }}</h2>
                    </div>
                </div>


                <div class="card-body">
                    <form action="/profile.update" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('名前') }}</b></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><b>{{ __('メールアドレス') }}</b></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email}}">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('更新') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection