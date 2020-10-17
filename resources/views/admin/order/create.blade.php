@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">주문 등록</h1>
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
                                <form action="/admin/auth" method="POST">
                                    {{ @csrf_field() }}
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-md-2 col-sm-12 text-center">성명</label>
                                        <input class="form-control col-md-10 col-sm-12" type="text" name="name" id="name" placeholder="성춘향">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">mobile</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="mobile" id="mobile" placeholder="01012341234">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="password" class="col-md-2 col-sm-12 text-center">품명</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="fummung" id="fummung" placeholder="품명">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">주소</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="address" id="address" placeholder="방이동 108-16번지 남강빌딩 2층 1호 ">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">나이</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="age" id="age" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">품</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="pum" id="pum" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">화장</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="hwajang" id="hwajang" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">앞길</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="abgil" id="abgil" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">깃</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="git" id="git" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">깃고대</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="gitgode" id="gitgode" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">긴 동</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="gindong" id="gindong" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">섶 옆</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="subyub" id="subyub" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">섭넓이</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="subnubi" id="subnubi" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">깃넓이</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="gitsubi" id="gitsubi" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">치마</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="chima" id="chima" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">총장</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="chongjang" id="chongjang" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">재단</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="jedan" id="jedan" placeholder="18">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">디자인</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="design" id="design" placeholder="18">
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
