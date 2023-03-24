
 @extends('layouts.includes.login_app')
 @section('content') 
			

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign in Form</h2>
													<div class="login-form">
                                                        @if(Session::has('fail'))
                            <span>{{Session::get('fail')}}<span>
                                @endif
                        <form action="{{ route('sinin.sinin') }}" method="post">
                            @csrf
								                          <input type="email" name="email" placeholder="E-mail" required="">
															<input type="password" name="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" value="SIGN IN">
															</div>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
													
													<h6><a href="{{ route('sinup') }}">Don't have an account??</a><h6>
													<h6><a href="{{ route('forgotPassword') }}">forgot password?</a><h6>
													
													 <h6><a href="main-page.html">Back To Home</a><h6>
												</div>
										</div>
										@endsection
											