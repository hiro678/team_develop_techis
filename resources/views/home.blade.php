@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
        @include('layouts.sidemenu')
        </div>
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">持ち物管理アプリ</h1>
                <div class="card-body">

                <form action="{{ url('search') }}" method="get">
                    @csrf 
                        <div class="row mb-5 justify-content-center mt-3">
                            <div class="col-md-6 d-flex flex-row">
                                <input type="text" placeholder="持ち物名を入力" name="keyword" class="form-control" value="">
                                <button class="btn btn-primary mx-3" type="submit">検索</button>
                            </div>
                        </div>
                </form>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
             <!-- 検索結果表示 -->      
            <div class="border-top">
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection