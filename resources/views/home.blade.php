<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Coding test</title>
</head>
<body>
<div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
    <span class="navbar-text">
      Ami Coding Pari Na 😑
    </span>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px">
        <a style="margin-bottom: 20px; text-align: left" href="{{route('logout',['token'=>\Tymon\JWTAuth\Facades\JWTAuth::fromUser($user)])}}" class="btn btn-dark">Logout</a>
        <h2 style="text-align: center; color: cadetblue">@if($status ?? '') Search Number Again @else Search Number @endif</h2><hr>
        <form action="{{route('search-number',['token'=>\Tymon\JWTAuth\Facades\JWTAuth::fromUser($user)])}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Input Values</label>
                <input type="text" name="input_value" value="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Search Values</label>
                <input name="search_value" value="{{old('search_value')}}" type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-dark">khoj</button>
        </form><br><hr>
        @if($status ?? '')
        <h2 style="text-align: center; color: darkgreen">Result: <strong>{{$status ?? '' ?? ''}}</strong></h2>
        @endif
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>
