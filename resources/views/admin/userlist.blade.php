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
                        <center><h1>Total No of Users</h1></center>
                        <br><br>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <!-- <th>Password</th> -->
                                <th>Action</th>
                            </tr>

                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->usertype}}</td>
                                <td>
                                    <a href="{{url('user_update/'.$user->id)}}" class="btn btn-info">Update</a>
                                    <a href="{{url('user_delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
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
