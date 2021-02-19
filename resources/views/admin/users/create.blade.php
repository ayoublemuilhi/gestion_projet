@extends('layouts.admin_layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
            @include('errors.error_success')
            <!-- SELECT2 EXAMPLE -->
                <form  method="post" action="{{url('admin_/users/create/store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><div class="design1"></div><div class="design2"></div><div class="design3"></div></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nom Complet<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" id="email_user" name="email" placeholder="Enter email" value="{{old('email')}}">
                                        <span id="chkCurrentEmail"></span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="category_name">Role<span style="color: red">*</span></label>
                                        <select name="role" id="role" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" disabled value ="" >-- choisi  un sec --</option>

                                         <option></option>


                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control select2" style="width: 100%;">
                                            <option value="1" selected>Activer</option>
                                            <option value="0">Bloquer</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Image (optional)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image"  accept="image/*">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>

                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" class=" btn_submit" value="Submit">
                    </div>
                </form>
            </div>
            <!-- /.card -->


        </section>
    </div>
@endsection
