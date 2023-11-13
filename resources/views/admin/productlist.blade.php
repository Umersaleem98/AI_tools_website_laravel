<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   @include('admin.head')
</head>

<body>


    <!-- Left Panel -->

@include('admin.sidebar')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
     @include('admin.header')
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


            @include('admin.body')

           <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table class="table" >
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>overview</th>
                        <th>description</th>
                        <th>Image</th>
                        <th>Actions</th>
                        
                      </tr>
                    @foreach($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->visit_link}}</td>
                        <td>{{$product->overview}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="{{asset('upload/products/'.$product->image)}}" width="70px" height="70px" alt=""></td>
                        <td>
                          <a href="{{url('editproduct/'.$product->id)}}" class="btn btn-info">Update</a>
                          <a href="{{url('deleteproduct/'.$product->id)}}" class="btn btn-danger">Delete</a>
                      
                        </td>
                      </tr>

                    @endforeach
                    </table>
                </div>
            </div>
           </div>
    

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
@include('admin.js')

</body>

</html>
