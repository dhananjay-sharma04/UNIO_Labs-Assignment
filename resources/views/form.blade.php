<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">Registeration</h1>
            <x-input type="text" name="name" label="Name"/>
            <x-input type="number" name="phoneNo" label="Phone No."/>
            <x-input type="email" name="email" label="Email"/>
            <x-input type="text" name="address" label="Address"/>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>