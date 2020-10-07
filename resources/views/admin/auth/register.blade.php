@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">관리자 등록</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12 card">
                        <form>
                            <div class="form-group col-12 form-inline">
                                <label for="id" class="col-md-1 col-sm-12 text-center">Email</label>
                                <input class="form-control col-md-8 col-sm-12" type="text" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <div class="form-group col-12 form-inline">
                                <label for="password" class="col-1 text-center">password</label>
                                <input class="form-control col-8" type="password" name="password" id="password" placeholder="password">
                            </div>
                            <div class="form-group col-12 form-inline">
                                <label for="id" class="col-1 text-center">password check</label>
                                <input class="form-control col-8" type="password" name="password_check" id="password_check" placeholder="name@example.com">
                            </div>
                            <div class="form-group col-12 form-inline">
                                <label for="id" class="col-1 text-center">name</label>
                                <input class="form-control col-8" type="text" name="name" id="name" placeholder="홍길동">
                            </div>
                            <div></div>
                        </form>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
