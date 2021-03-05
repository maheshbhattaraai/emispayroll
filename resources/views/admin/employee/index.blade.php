@extends('admin.index')
@section('dashboard.content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Employee</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="{{route('create-admin-employee')}}" class="btn btn-primary pull-right" > Add New Employee</a>
        </div>
    </div>
    
    <div class="col-md-12">
            
    </div>
    
@endsection