@extends('admin.layout.app')

@section('headSection')
    <link rel="stylesheet"
          href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <div>
                        <h3 class="box-title" style="margin-right: 50px">Data Tags Table</h3>
                        <a href="{{route('tag.create')}}"><i class="fa fa-plus"></i></a>
                    </div>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title </th>
                            <th>Su-title</th>
                            <th>Slug</th>
                            <th>Body</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->sub_title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    <a href="{{route('tag.edit', $post->id)}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                </td>
                                <td>
                                    <form id="delete-tag{{$post->id}}" method="post" action="{{route('tag.destroy', $post->id)}}" style="display: none">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    </form>

                                    <a href="" onClick="if (confirm('Are you sure to delete?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-tag{{$post->id}}').submit();
                                            }else
                                            {
                                            event.preventDefault();
                                            }">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Title </th>
                            <th>Su-title</th>
                            <th>Slug</th>
                            <th>Body</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footerSection')

    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection
