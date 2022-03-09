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
                                    <input type="text" placeholder="持ち物名を入力" name="keyword" class="form-control">
                                    <button class="btn btn-primary mx-2 px-3" type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg></button>
                                </div>
                            </div>
                    </form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <!-- 検索結果表示 -->
                @if(isset($items) && $items->count())     
                <table class="table table-bordered">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>持ち物名</th>
                        <th>在庫数</th>
                        <th>最終購入日</th>
                        <th></th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->bought_at->format('Y-m-d') }}</td>
                                <!-- 編集画面へ遷移 -->
                            <td><u><a href="{{ url('item.edit') . '/' . $item->id }}" class="btn btn-primary btn-sm">編集</a></u></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @elseif(!empty($keyword))
                <div class="border-top">
                    <p class="mt-3">見つかりませんでした。</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection