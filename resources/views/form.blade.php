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
        <!-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> -->
        <div class="container">
            <h1 class="text-center">Registeration</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" aria-describedby="helpID" value = "{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Phone No.</label>
                <input type="Number" name="phoneNo" class="form-control" aria-describedby="helpID" value = "{{old('phoneNo')}}">
                <span class="text-danger">
                    @error('phoneNo')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email ID</label>
                <input type="email" name="email" class="form-control" aria-describedby="helpID" value = "{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" aria-describedby="helpID" value = "{{old('address')}}">
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</body>
</html>