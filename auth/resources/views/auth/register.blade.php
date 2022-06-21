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
        <h4>REGISTER USER</h4>
        <form action="{{ route('postuser') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                {{-- <input type="text" name="role" id=""> --}}
                <select name="role" id="">
                    <option value="admin">Admin</option>
                    <option value="client">Client</option>
                    <option value="rektor">Rektor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
            <button type="submit">SIMPAN USER</button>
        </form>
    </div>
    
</body>
</html>