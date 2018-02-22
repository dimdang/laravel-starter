@extends('admin.layout.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
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
                            <h3 class="box-title">Title</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="{{ route('post.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title">
                                        @if ($errors->has('title'))<span class="text-danger">{{ $errors->first('title') }}</span>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="subTitle">Sub Title</label>
                                        <input type="text" name="sub_title" class="form-control" id="exampleInputPassword1" placeholder="sub title">
                                        @if ($errors->has('sub_title'))<span class="text-danger">{{ $errors->first('sub_title') }}</span>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="slug">
                                        @if ($errors->has('slug'))<span class="text-danger">{{ $errors->first('slug') }}</span>@endif
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" name="image" id="exampleInputFile">

                                    </div>
                                    <br>
                                    <br>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="status"> Publish
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Bootstrap WYSIHTML5 <small>Simple and fast</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-default btn-sm" data-widget="remove"
                                                data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea class="textarea" name="body" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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