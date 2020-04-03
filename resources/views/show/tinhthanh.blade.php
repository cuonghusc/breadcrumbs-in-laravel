<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>{{$tinhthanh->name}}</title>
</head>
<body>

    {{ Breadcrumbs::render('tinhthanh', $tinhthanh) }}

    <div class="container">
        <div class="row">
            @foreach ($quanhuyens as $key => $value)
                <div class="col col-sm-2">
                    <a href="{{route('quanhuyen',$value->id)}}"class="btn btn-default">{{$value->name}}</a>
                </div>
            @endforeach                        
        </div>
    </div> 
</body>
</html>