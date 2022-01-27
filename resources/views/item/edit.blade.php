<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
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
    <h3>持ち物を編集・削除する</h3>

    <form>
        <div> 
            <label for=""class="name">名称</label>
            <input class="form-control" type="text" placeholder="名称">
            <br>
        </div>
    </form>
    <form>
        <div>
            <label for=""class="name">購入量</label>
            <input type="number" class="form-control" value="1" min="0" max="100" step="1">
            <br>
        </div>
    </form>
    <form>
        <div>
            <label for=""class="name">購入日</label>
            <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" >
            <br>
        </div>
    </form>
    <div class="mb-3">
        <label for=""class="name">画像</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div>
        <label for=""class="name">アラート</label>
        <input class="form-control" type="text" placeholder="アラート">
        <br>
    </div>
    <form>
        <div>
            <label for=""class="name">備考</label>
            <input class="form-control" type="text" placeholder="備考">
            <br>
        </div>
    </form>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary btn-lg" type="button">編集</button>
        <button class="btn btn-primary btn-lg" type="button">削除</button>
    </div>
</body>
</html>
