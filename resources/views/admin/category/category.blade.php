@extends('admin.layout.app')

@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                General Form Elements
                <small>Preview</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Editors</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form"  action="{{ route('category.store') }} " method="post">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Category Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="category name">
                                    </div>
                                    <div class="form-group">
                                        <label for="subTitle">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="slug">
                                    </div>
                                </div>

                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection