<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>持ち物を編集・削除する</h2>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('item.update',['id'=>$item->id])}}" >
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
                                            <input name="bought_at" id="bought_at" type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" >
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
                                            <input name="alert" id="alert" class="form-control" type="text" value="{{$item->alert}}">
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
                                    <br>
                                </div>
                        </form>
                        <form method="POST" action="{{route('item.destroy',['id'=>$item->id])}}">
                            @csrf
                            <div class="d-grid gap-2 col-2 mx-auto" id="button">
                                <button class="btn btn-primary" type="submit">削除</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
