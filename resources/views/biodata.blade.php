@extends('layouts.includes.app')

@section('content') 

												
							  <div class="wthree_general graph-form agile_info_shadow ">
								
								<h3 class="w3_inner_tittle two">Biodata </h3>

								   <div class="grid-1 ">
                                    {{-- <img src="images/{{ Session::get('image') }}"> --}}
										   <div class="form-body">
                                               
											

												<form role="form" class="form-horizontal" method="post" action="{{route('biodata.store')}}"  enctype="multipart/form-data">
													@csrf

													   <div class="form-group">
														   
													@if(Session::has('success'))
													<span>{{Session::get('success')}}<span>
														<img src="image1/{{ Session::get('image') }}">
														
														@endif
													
													
														   <label for="name" class="col-sm-2 control-label">Name</label>
														   <div class="col-sm-8">
															   <input type="text" class="form-control1"  name="name" id="name" placeholder="Enter ur name">
															  <span  class="text-danger">@error('name') {{$message}} @enderror </span>
														   </div>
														   
													   </div>
													   <div class="form-group">
														   <label for="age" class="col-sm-2 control-label">Age</label>
														   <div class="col-sm-8">
															<input type="text" class="form-control1" id="age" name="age" placeholder="Enter ur age"> 
															<span  class="text-danger">@error('age') {{$message}} @enderror </span> 
														   </div>
													   </div>
													   <div class="form-group">
														   <label for="text" class="col-sm-2 control-label">Address</label>
														   <div class="col-sm-8">
															   <input type="text" class="form-control1" id="address"  name="address" placeholder="address">
															   <span  class="text-danger">@error('address') {{$message}} @enderror </span>
														   </div>
													   </div>
                                                       


                                                       
            <div class="mb-3">
                <label class="form-label" for="inputImage">Image:</label>
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control ">
					<span  class="text-danger">@error('image') {{$message}} @enderror </span>
			</div>
													  <div>
													   <input type="submit" class="btn btn-info" name="save" value="save">
													   
													   </div>
													</form>
															   @endsection