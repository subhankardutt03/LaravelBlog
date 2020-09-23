@extends('admin/layout/layout')

<!-- @section('page_title','post listing') -->

@section('container')

<div class="page-title">
            <div class="title_left">
              <h3>CONTACT</h3>
              <!-- <h5><a href="{{url('/admin/page/add')}}">Add Page</a></h5> -->
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_content">
                <div class="row">
                <!-- <div class="text-success text-center" style="font-size:20px;">
                  {{session('msg')}}
                </div> -->
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">

                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead style="font-size:15px;">
                          <tr>
                            <th width="5%">ID</th>
                            <th width="13%">NAME</th>
                            <th width="15%">EMAIL</th>
                            <th width="12%">MOBILE</th>
                               <th width="45%">MESSAGE</th>
                               <th width="10%">ADDED ON</th>
                          </tr>
                        </thead>


                        <tbody style="font-size:15px;">
                        @foreach($result as $list)
                          <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->mobile}}</td>
                            <td>{{$list->message}}</td>
                            <td>{{$list->added_on}}</td>
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