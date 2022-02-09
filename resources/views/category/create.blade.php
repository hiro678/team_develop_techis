@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">カテゴリーを追加する</h3>

                <div class="card-body">
                    <form action="{{ url('category.store') }}" method="post">
                    @csrf 
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>カテゴリー名</b></label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" autofocus>
                            </div>
                        </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary" type="submit">追加</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
