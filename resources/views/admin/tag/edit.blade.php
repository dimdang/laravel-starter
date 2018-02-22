@extends('admin.layout.app')

@section('main-content')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <a href="{{route('tag.index')}}"><small><i> &nbsp;&nbsp;&nbsp;<< Back</i></small></a>
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
                        <h3 class="box-title">Tags</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('tag.update', $tag->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title">Tag Title</label>
                                    <input type="text" name="name" value="{{$tag->name}}" class="form-control" id="exampleInputEmail1" placeholder="tag title">
                                    @if ($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span>@endif
                                </div>
                                <div class="form-group">
                                    <label for="slug">Tag Slug</label>
                                    <input type="text" name="slug" value="{{$tag->slug}}" class="form-control" id="exampleInputPassword1" placeholder="tag slug">
                                    @if ($errors->has('slug'))<span class="text-danger">{{ $errors->first('slug') }}</span>@endif
                                </div>
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@endsection