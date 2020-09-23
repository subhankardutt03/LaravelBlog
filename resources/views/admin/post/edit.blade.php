@extends('admin/layout/layout')

<!-- @section('page_title','manage post') -->

@section('container')

				<div class="page-title">
						<div class="title_left">
							<h3>Manage Post</h3>
						</div>


					</div>


					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">

						</div>
						<div class="x_content">
							<br />
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
								method="post" action="{{url('/admin/post/update/'.$result['0']->id)}}" enctype="multipart/form-data">
							@csrf
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="title" class="form-control" name="title" value="{{$result['0']->title}}">
									<span class="text-danger">@error('title')
									{{$message}}
									@enderror</span>
									</div>

									
                                </div>

								<div class="form-group row">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slug <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="title" class="form-control" name="slug" value="{{$result['0']->slug}}">
									<span class="text-danger">@error('slug')
									{{$message}}
									@enderror</span>
									</div>



                                </div>
                                
                                <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Short Desc <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<textarea class="form-control" name="short_desc">{{$result['0']->short_desc}}</textarea>
										<span class="text-danger">@error('short_desc')
									{{$message}}
									@enderror</span>
									</div>
                                </div>

                                 <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Long Desc <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<textarea class="form-control" name="long_desc" >{{$result['0']->long_desc}}</textarea>
										<span class="text-danger">@error('long_desc')
									{{$message}}
									@enderror</span>
									</div>
                                </div>

                                 <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="file" class="form-control" name="image"/>
										<span class="text-danger">@error('image')
									{{$message}}
									@enderror</span>
									</div>
                                </div>

                                <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Post Date <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="date" class="form-control" name="post_date" value="{{$result['0']->post_date}}"/>
										<span class="text-danger">@error('post_date')
									{{$message}}
									@enderror</span>
									</div>
                                </div>
                                
								
								</div>



								<div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-10">
										<br/>
										<button type="submit"  style="margin-left:182px;width:200px" class="btn btn-success">Submit</button>
									</div>
								</div>

							</form>
						</div>
					</div>

@endsection

<style>

label{
    font-weight:bold;
   text-transform:uppercase;
}    
</style>