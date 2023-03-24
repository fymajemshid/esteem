@extends('layouts.includes.login_app')
@section('content') 
		   
			
	<div class="pages_agile_info_w3l">
		<!-- /login -->
		   <div class="over_lay_agile_pages_w3ls">
				<div class="registration">
			
							<div class="signin-form profile">
								<h2>Change Password</h2>

		<form action="{{route('ChangePassword')}}" method="post">
			@csrf 
            @if (Session::has('success'))
			<span>{{Session::get('success')}}</span>
			@endif
			@if (Session::has('fail'))
			<span>{{Session::get('fail')}}</span>
			@endif
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<span class="text-danger">@error('email') {{$message}} @enderror</span>
			<input type="password" class="ggg" name="password" placeholder="NEW PASSWORD" required="">
			<span class="text-danger">@error('password') {{$message}} @enderror</span>
			<input type="password" class="ggg" name="confirmpassword" placeholder="CONFIRM PASSWORD" required="">
			<span class="text-danger">@error('conpassword') {{$message}} @enderror</span>
			<!-- <span><input type="checkbox" />Remember Me</span> -->
			<h6><a href="{{route('sinin')}}">Login</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Save" name="login">
		</form>
		{{-- <p>Don't Have an Account ?<a href="{{route('admin.register')}}">Create an account</a></p> --}}
@endsection