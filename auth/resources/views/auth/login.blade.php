<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="padding-left: 37%">
        <form action="{{ route('postlogin') }}" method="post">
            @csrf
            <h1>LOGIN</h1><br>
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Email"><br><br>
        <label for="">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password"><br>
        <br>
        <button type="submit" class="btn btn-success">SUBMIT</button>
        </form>
    </div>
</body>
</html>