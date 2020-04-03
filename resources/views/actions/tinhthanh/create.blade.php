<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Trang chủ</title>
</head>
<body>

{{ Breadcrumbs::render('home') }}
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Thêm tỉnh/thành phố</h3>
            </div>
            <div class="panel-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('failed'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    {{ dd($request->name)}}
                @endif
                
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <label for="Tên thành phố">Tên tỉnh/thành phố</label>
                    <input name="name" type="text" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <a href="{{route('home')}}" class="btn btn-default">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>