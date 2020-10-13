@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">관리자 목록</h1>
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
                            <div class="card-header">
                                <div class="form-row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <button class="btn btn-success">등록</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-inline form-row">
                                            <select name="option" class="form-control col-sm-3" style="text-align-last:center">
                                                <option value="name">이름</option>
                                                <option value="mobile">mobile</option>
                                                <option value="email">email</option>
                                            </select>
                                            <input type="text" name="value" value="" class="form-control col-sm-6" placeholder="검색어를 입력해 주세요" style="margin-left:5px; margin-right:5px">
                                            <button class="btn btn-primary col-sm-2">검색</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover col-sm-12 col-md-12">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">email</th>
                                            <th class="text-center">이름</th>
                                            <th class="text-center">mobile</th>
                                            <th class="text-center">등록일</th>
                                            <th class="text-center">button</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary">수정</button>
                                                <button type="button" class="btn btn-danger">삭제</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

