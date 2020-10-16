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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-success" id="adminCreate" data-location="{{ route('auth.create') }}">등록</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form method="get">
                                            <div class="form-inline form-row">
                                                <select name="option" class="form-control col-md-12 col-lg-3" style="text-align-last:center">
                                                    <option @if(request()->get('option') == "name")selected @endif value="name">이름</option>
                                                    <option @if(request()->get('option') == "mobile")selected @endif value="mobile">mobile</option>
                                                    <option @if(request()->get('option') == "email")selected @endif value="email">email</option>
                                                </select>
                                                <input type="text" name="value" value="{{ request()->get('value') }}" class="form-control col-md-12 col-lg-7" placeholder="검색어를 입력해 주세요">
                                                <button class="btn btn-primary col-md-12 col-lg-2">검색</button>
                                            </div>
                                        </form>
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
                                    @if($adminUsers->count() > 0)
                                        @foreach($adminUsers as $adminUser)
                                        <tr>
                                            <td class="text-center">{{ $adminUser->id }}</td>
                                            <td class="text-center">{{ $adminUser->email }}</td>
                                            <td class="text-center">{{ $adminUser->name }}</td>
                                            <td class="text-center">{{ $adminUser->mobile }}</td>
                                            <td class="text-center">{{ $adminUser->created_at }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary update-button" data-id="{{ $adminUser->id }}">수정</button>
                                                <button type="button" class="btn btn-danger delete-button" data-id="{{ $adminUser->id }}">삭제</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="6">EMPTY</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" id="delete-form" name="delete-form">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('#adminCreate').on('click', function() {
                location.href = $(this).data('location');
            });
            $('.update-button').on('click', function() {
                location.href = '/admin/auth/'+$(this).data('id')+'/edit';
            });
            $('.delete-button').on('click', function() {
                if(confirm('관리자를 정말 삭제 하시겠습니까?')) {
                    $('#delete-form').attr('action', '/admin/auth/'+$(this).data('id')).submit();
                }
            });
        });
    </script>
@endsection
