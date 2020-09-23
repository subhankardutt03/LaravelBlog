@extends('admin/layout/layout')

<!-- @section('page_title','post listing') -->

@section('container')

<div class="page-title">
            <div class="title_left">
              <h3>POST</h3>
              <h5><a href="/admin/post/add">Add Post</a></h5>
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_content">
                <div class="row">
                <div class="text-success text-center" style="font-size:20px;">
                  {{session('msg')}}
                </div>
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">

                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead style="font-size:15px;">
                          <tr>
                            <th width="2%">ID</th>
                            <th width="15%">Title</th>
                            <th width="36%">Short Description</th>
                            <th width="17%">Image</th>
                            <th width="10%">Post Date</th>
                            <th width="20%">Action</th>
                            
                          </tr>
                        </thead>


                        <tbody style="font-size:15px;">
                        @foreach($result as $list)
                          <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->title}}</td>
                            <td>{{$list->short_desc}}</td>
                            <td><img src="{{asset('/storage/post/'.$list->image)}}" width="150px"
                            height="80px"></td>
                            <td>{{$list->post_date}}</td>
                            <td>
                                <a class="btn btn-success" style="width:60px;height:35px;font-size:15px;color:#fff"
                                  href="{{url('admin/post/edit/'.$list->id)}}">Edit</a>
                                <a class="btn btn-danger" style="width:70px;height:35px;font-size:15px;color:#fff"
                                  href="{{url('admin/post/delete/'.$list->id)}}">Delete</a>
                            </td>
                          </tr>
            
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
            </div>
          </div>
      </div>
      </div>
      </div>
     

@endsection