<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>item</title>
    <style>
        h3{
            text-align: center;
        }
        .form-control-file{
            text-align: center;
        }
        .form-control{
            width: 400px;
            margin: auto;
        }
        .name{
            position: relative;
            left: 270px;
            top: 30px;
        }
    </style>
</head>

<body>
    <h3>持ち物を登録する</h3>

    <form method="POST" action="{{route('item.store')}}">
    @csrf
        <div class="form-group">
            <label class="name">名称</label>
            <input name="name" id="name" class="form-control" type="text" placeholder="名称">
            <br>
        </div>
        <div class="form-group">
            <label class="name">購入量</label>
            <input name="amount" id="amount" type="number" class="form-control" value="1" min="0" max="100" step="1">
            <br>
        </div>
        <div class="form-group">
            <label class="name">購入日</label>
            <input name="bought_at" id="bought_at" type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" >
            <br>
        </div>
        <div class="form-group">
            <label class="name">画像</label>
            <input name="image_name" id="image_name" class="form-control" type="file" id="formFile">
        </div>
        <div class="form-group">
            <label class="name">アラート</label>
            <input name="alert" id="alert" class="form-control" type="text" placeholder="アラート">
            <br>
        </div>
        <div class="form-group">
            <label class="name">備考</label>
            <input name="comment" id="comment" class="form-control" type="text" placeholder="備考">
            <br>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto">
            <input class="btn btn-primary" type="submit" value="登録">
        </div>
    </form>
</body>
</html>
