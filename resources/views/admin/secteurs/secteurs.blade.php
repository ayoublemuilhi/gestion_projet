@extends('layouts.admin_layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Secteurs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Secteurs</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">

                    <div class="card-header">
                        <a href="{{url('/secteur/create/')}}" data-toggle="tooltip" data-placement="top" title="Ajouter un secteur" class="btn btn-success btn_add_edit float-right" style="display: inline-block" ><i class="fas fa-user-plus"></i> Ajouter</a>

                        @include('errors.error_success')
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="users_data" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>secteur</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1  ?>
                           @foreach($secteurs as $secteur)
                               <tr>
                                   <td>{{$i++}}</td>
                                   <td>{{$secteur->T_secteur}}</td>
                                   <td>
                                       <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                       <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                   </td>
                               </tr>
                           @endforeach


                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="data_ici">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
