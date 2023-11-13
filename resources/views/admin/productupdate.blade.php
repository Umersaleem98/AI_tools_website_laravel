<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productupdate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <form action="{{url('/editproduct/'.$product->id)}}" method="post" enctype="multipart/form-data" style="padding:25px;">
                    @csrf
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Visit Link</label>
                        <input type="text" class="form-control" name="visit_link" value="{{$product->visit_link}}" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product overview</label>
                        <input type="text" class="form-control" name="overview" value="{{$product->overview}}"id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product Descriptions</label>
                        <input type="text" class="form-control" name="description" value="{{$product->description}}" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Hash Tags`</label>
                        <input type="text" class="form-control" name="hashtags" value="{{$product->hashtags}}" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product Image</label>

                        <input type="file" class="form-control" value="{{$product->image}}" name="image" id="">
                        <img src="{{asset('upload/products/'.$product->image)}}" width="70px" height="70px" alt="">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" id="">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>