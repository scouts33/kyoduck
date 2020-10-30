@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">관리자 수정</h1>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">&nbsp;</div>
                                <form action="{{ route('auth.update', ['auth' => $adminUser->id]) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-md-2 col-sm-12 text-center">Email</label>
                                        <input class="form-control col-md-10 col-sm-12" type="text" name="email" id="email" placeholder="name@example.com" value="{{ $adminUser->email }}" readonly>
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="password" class="col-md-2 col-sm-12 text-center">password</label>
                                        <input class="form-control col-sm-12 col-md-10" type="password" name="password" id="password" placeholder="password">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">new Password</label>
                                        <input class="form-control col-sm-12 col-md-10" type="password" name="new_password" id="new_password" placeholder="new Password">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">password Check</label>
                                        <input class="form-control col-sm-12 col-md-10" type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="password Check">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">name</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="name" id="name" placeholder="홍길동" value="{{ $adminUser->name }}">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">mobile</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="mobile" id="mobile" placeholder="01012341234" value="{{ $adminUser->mobile }}">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">등록</button>
                                        <button type="button" class="btn btn-danger">취소</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

