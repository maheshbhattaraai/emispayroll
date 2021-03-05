@extends('admin.index')
@section('dashboard.content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Resource</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#booksModal"> Add New Resource</button>
        </div>
    </div>
    
    <div class="col-md-12">
        <livewire:admin.book/>
            
    </div>
    
@endsection