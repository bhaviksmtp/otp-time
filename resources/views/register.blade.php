<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
    .container {
    margin-top:2%;
    }
</style>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
    
            <h1>Register</h1>

            @if($errors->any())
                @foreach($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ route('studentRegister') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                <br>
                <input type="email" class="form-control"  name="email" placeholder="Enter Email">
                <br>
                <input type="password" class="form-control"  name="password" placeholder="Enter Password">
                <br>
                <input type="password" class="form-control"  name="password_confirmation" placeholder="Enter Confirm Password">
                <br>
                <input type="file" class="form-control" name="filename[]" multiple />
                <br>
                <br>
                <input type="submit" value="Register" class="btn btn-success">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

    @if(Session::has('success'))
        <p style="color:green;">{{ Session::get('success') }}</p>
    @endif
</div>

</body>
</html>




