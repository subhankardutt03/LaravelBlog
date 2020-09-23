<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   


    <title>{{config('constants.site_name')}} </title>

    <!-- Bootstrap -->
  <link href="{{asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- Font Awesome -->
  <link href="{{asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{asset('admin_assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin_assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_assets/build/css/custom.min.css')}}" rel="stylesheet">

   
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{url('/admin/login_submit')}}" method="post">
            @csrf
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="username" required="" name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div class="text-danger">
                  {{session('msg')}}
                </div>
                <br/>
              <div>
               <button type="submit" class="btn btn-success" name="submit">Login</button>
                
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>

     
      </div>
    </div>
  </body>
</html>
