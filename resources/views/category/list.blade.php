@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
            @include('layouts.sidemenu')
        </div>

        <!-- カテゴリ一覧表示 -->
        @if (count($category) > 0)

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-header">カテゴリー一覧</h3>
                    <table class="table table-striped table-hover">
                        <!-- テーブルヘッダ -->
                        <thead class="table-info">
                            <tr>
                                <th>管理番号</th>
                                <th>カテゴリー名</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <!-- テーブル本体 -->
                        <tbody>
                            @foreach ($category as $category)
                            <tr>
                                <!-- カテゴリー名 -->
                                <th scope="row">
                                    <div>{{$category->id}}</div>
                                </th>
                                <td class="table-text">
                                    <div>{{ $category->name }}</div>
                                </td>
                                <td>
                                    <!--編集ページへ遷移する -->
                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}"><button class="user-btn">編集</button></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection