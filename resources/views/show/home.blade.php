<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Trang chủ</title>
</head>
<body>

{{ Breadcrumbs::render('home') }}
    <div class="container">
        <a href="{{route('create')}}" class="btn btn-success btn-sm pull-right">Thêm</a>
        <br>
        <hr>
        <div class="row">
            @foreach ($tinhthanhs as $key => $value)
                <div class="col col-sm-2">
                    <a href="{{route('tinhthanh',$value->id)}}"class="btn btn-block btn-default">{{$value->name}}</a>
                </div>
            @endforeach                        
        </div>
    </div>    
</body>
</html>