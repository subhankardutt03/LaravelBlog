@extends('admin/layout/layout')

<!-- @section('page_title','post listing') -->

@section('container')

<div class="page-title">
            <div class="title_left">
              <h3>PAGE</h3>
              <h5><a href="{{url('/admin/page/add')}}">Add Page</a></h5>
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
                            <th width="5%">ID</th>
                            <th width="30%">NAME</th>
                            <th width="30%">SLUG</th>
                            <th width="35%">Action</th>
                            
                          </tr>
                        </thead>


                        <tbody style="font-size:15px;">
                        @foreach($result as $list)
                          <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->slug}}</td>
                            <td>
                                <a class="btn btn-success" style="width:60px;height:35px;font-size:15px;color:#fff"
                                  href="{{url('admin/page/edit/'.$list->id)}}">Edit</a>
                                <a class="btn btn-danger" style="width:70px;height:35px;font-size:15px;color:#fff"
                                  href="{{url('admin/page/delete/'.$list->id)}}">Delete</a>
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