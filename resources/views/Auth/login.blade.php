@extends('layouts.empty')

@section('content')
    <div class="form-group row mb-0" id="login_btn">
        <div class="col-md-8 offset-md-4">
            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i>Đăng nhập với Google</a>
        </div>
    </div>
    <div id="login_form"></div>
@endsection