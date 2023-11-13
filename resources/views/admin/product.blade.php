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

            <!-- content secttion  -->
    


           <div class="container" >
            <div class="row">
                <h1>Add Product</h1>
                <div class="col-md-8">
                <form action="{{url('/addproduct')}}" method="post" enctype="multipart/form-data" style="padding:25px;">
                    @csrf
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Visit Link</label>
                        <input type="text" class="form-control" name="visit_link" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product overview</label>
                        <input type="text" class="form-control" name="overview" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product Descriptions</label>
                        <input type="text" class="form-control" name="description" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Hash Tags`</label>
                        <input type="text" class="form-control" name="hashtags" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Product Image</label>
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" id="">
                    </div>

                </form>
                </div>
            </div>
           </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
@include('admin.js')

</body>

</html>
