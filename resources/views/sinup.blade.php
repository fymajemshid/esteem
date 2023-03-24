@extends('layouts.includes.login_app')
@section('content') 
		   

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
						
    @if(Session::has('success'))
	<div class="alert alert-success">{{Session::get('success')}}</div>
	@endif
	@if(Session::has('fail'))
	<div class="alert alert-danger">{{Session::get('fail')}}</div>
	@endif
                        <form action="{{route('sinup.store')}}" method="post" class="">
                            @csrf
															<input type="text" name="username" placeholder="username" required="">
															<span  class="text-danger">@error('username') {{$message}} @enderror </span>

																<input type="email" name="email" placeholder="email" required="">
															<span  class="text-danger">@error('email') {{$message}} @enderror </span>


																<input type="password" name="password" placeholder="password" required="">
															<span  class="text-danger">@error('password') {{$message}} @enderror </span>

																<input type="password" name="cpassword" placeholder="cpassword" required="">
																<span  class="text-danger">@error('cpassword') {{$message}} @enderror </span>
                
        
																{{-- <input name="invisible" type="hidden" value="secret">
							 --}}
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													<h6><a href="{{ route('sinin') }}">login</a><h6>
													
														<h6><a href="{{ route('home') }}">Back To Home</a><h6>
												</div>
										</div>
										@endsection