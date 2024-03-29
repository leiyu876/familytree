@extends('layouts.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Loan</b>System</a>
        </div>      
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="../../index2.html" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                 </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
                        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-block btn-flat">Sign In</a>
                    </div>
              </div>
            </form>
        </div>
    </div>
@endsection
