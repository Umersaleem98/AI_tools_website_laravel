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
    
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <form action="{{url('/user_register')}}" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="">User Name</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">User Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>
                    <div class="form-group">
                        <label for="">User Type</label>
                        <input type="number" class="form-control" name="usertype" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>
                  
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
