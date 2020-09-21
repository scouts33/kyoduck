@extends('layouts.admin.app')

@section('content')
    <div class="content-header">
        <h1 class="text-dark">관리자 관리</h1>
    </div>
    <div class="content px-2">
        <form id="searchForm" name="searchForm">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
@endsection
