@extends('admin.layouts.app')

@section('admin.dashboard')
    <div class="col-sm-12 login-container" >
        <div class="col-md-4 login-form-1">
           
            <livewire:admin.login/>
        </div>
    </div>
    
    <style>
        .login-container{
            margin-top: 5%;
            margin-bottom: 5%;
            
        }
        .login-form-1{
            padding: 3%;
           
            margin: 0 auto;
           
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }
        .login-form-1 h2{
            text-align: center;
            color: #333;
        }
        
        .login-container form{
            padding: 10%;
        }
        .btnSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
        }
        .login-form-1 .btnSubmit{
            font-weight: 600;
            color: #fff;
            background-color: #0062cc;
        }
        
        .login-form-1 .ForgetPwd{
            color: #0062cc;
            font-weight: 600;
            text-decoration: none;
        }
        .help-block ul li {
            list-style: none;
            

        }
    </style>
    
@endsection