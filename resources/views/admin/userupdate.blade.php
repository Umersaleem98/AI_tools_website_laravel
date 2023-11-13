<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        
    <div class="row">
        <div class="col-md-6">
            <h1>Update</h1>
        </div>
    </div>
    <div class="row">

            <div class="col-md-8">
            <form action="{{url('/user_update/'.$users->id)}}" method="POST">
                        @csrf
                       
                    <div class="form-group">
                        <label for="">User Name</label>
                        <input type="text" class="form-control" value="{{$users->name}}" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">User Email</label>
                        <input type="email" class="form-control" value="{{$users->email}}" name="email" id="">
                    </div>
                    <div class="form-group">
                        <label for="">User Type</label>
                        <input type="number" class="form-control" value="{{$users->usertype}}" name="usertype" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" value="{{$users->password}}" name="password" id="">
                    </div>
                  
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" id="">
                    </div>

                        </form>
            </div>
        </div>
    </div>
</body>
</html>