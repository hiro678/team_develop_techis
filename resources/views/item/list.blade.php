@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
            @include('layouts.sidemenu')
        </div>

        <!-- アイテム一覧表示 -->
        @if (count($item) > 0)

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-header">アイテム一覧</h3>
                    <table class="table table-striped table-hover">
                        <!-- テーブルヘッダ -->
                        <thead class="table-info">
                            <tr>
                                <th>管理番号</th>
                                <th>名称</th>
                                <th>個数</th>
                                <th>購入日</th>
                                <th>備考</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <!-- テーブル本体 -->
                        <tbody>
                            @foreach ($item as $item)
                            <tr>
                                <!-- アイテム名 -->
                                <th scope="row">
                                    <div>{{$item->id}}</div>
                                </th>
                                <td class="table-text">
                                    <div>{{ $item->name }}</div>
                                    <div class="item">
                                            <img class="d-block mx-auto" src="{{ Storage::url($item->image_name) }}" alt="" width="150px" height="150px">
                                        </div>
                                </td>
                                <!-- 個数 -->
                                <td>
                                    <div>{{ $item->amount }}</div>
                                </td>
                                <!-- 購入日 -->
                                <td>
                                    <div>{{ $item->bought_at->format('Y-m-d') }}</div>
                                </td>
                                <!-- 備考 -->
                                <td>
                                    <div>{{ $item->comment }}</div>
                                </td>
                                <td>
                                    <!--編集ページへ遷移する -->
                                    <a href="{{ route('item.edit', ['id' => $item->id]) }}"><button class="" type="submit">編集</button></a>
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