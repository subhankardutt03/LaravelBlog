@extends('admin/layout/layout')

<!-- @section('page_title','manage post') -->

@section('container')

				<div class="page-title">
						<div class="title_left">
							<h3>Manage Page</h3>
						</div>


					</div>


					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">

						</div>
						<div class="x_content">
							<br />
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
								method="post" action="{{url('/admin/page/submit')}}" enctype="multipart/form-data">
							@csrf
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="name" class="form-control" name="name">
									<span class="text-danger">@error('name')
									{{$message}}
									@enderror</span>
									</div>

									
                                </div>
                                
                                <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slug <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="slug" class="form-control" name="slug">
										<span class="text-danger">@error('slug')
									{{$message}}
									@enderror</span>
									</div>
                                </div>

                                 <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<textarea class="form-control" name="description"></textarea>
										<span class="text-danger">@error('description')
									{{$message}}
									@enderror</span>
									</div>
                                </div>

                                <div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
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