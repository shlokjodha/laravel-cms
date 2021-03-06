@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Add User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{!! url('admin/dashboard') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{!! url('admin/user') !!}">Users</a></li>
        <li class="active"> Add User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('admin.user.addform')
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection