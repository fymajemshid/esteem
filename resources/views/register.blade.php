@extends('layouts.includes.app')
@section('content')	  

												
							  <div class="wthree_general graph-form agile_info_shadow ">
								
								<h3 class="w3_inner_tittle two">General Form </h3>

								   <div class="grid-1 ">
									
										   <div class="form-body">
											

												<form role="form" class="form-horizontal" method="post" action="{{route('register.store')}}">
													@csrf

													   <div class="form-group">
														   
													@if(Session::has('register'))
													<span>{{Session::get('register')}}<span>
														@endif
													
													
														   <label for="name" class="col-sm-2 control-label">Name</label>
														   <div class="col-sm-8">
															   <input type="text" class="form-control1"  name="name" id="name" placeholder="Enter ur name">
														   </div>
														   
													   </div>
													   <div class="form-group">
														   <label for="qualification" class="col-sm-2 control-label">qualification</label>
														   <div class="col-sm-8">
															<input type="text" class="form-control1" id="qualification" name="qualification" placeholder="Enter ur qualification">  
														   </div>
													   </div>
													   <div class="form-group">
														   <label for="inputPassword" class="col-sm-2 control-label">Password</label>
														   <div class="col-sm-8">
															   <input type="password" class="form-control1" id="inputPassword"  name="password" placeholder="Password">
														   </div>
													   </div>
													   <div class="form-group">
														<label >Semester</label>
														<select class="form-control m-bot15" name="semester">
														  <option value="sem1">sem-1</option>
														  <option value="sem2">sem-2</option>
														</select>
													   </div>
													   <input type="submit" class="btn btn-info" name="save" value="save">
													   
													   </div>
													</form>
															   @endsection