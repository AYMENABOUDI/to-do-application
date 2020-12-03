<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>Calendar - Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.titleapp{border:1px solid #F1F1F1;margin-top:0px;padding:20px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}
</style>

</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">

  
  
<div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>

	
    <div class="col-md-4 col-lg-4 ">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">

            <div class="col-md-12 col-lg-12 mx-auto titleapp" style="">
              <h3 class="login-heading mb-4">Welcome back!</h3>
               <form action="{{route('saveadminlogin')}}" method="POST" id="logForm">

                 {{ csrf_field() }}

				          <div class="input-group mb-3">
						  <label for="inputEmail" style="width:100%;">Email address <span style="color:#a60109;">( admin@gmail.com )</span></label>

                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-at"></i></span>
                          </div>
                       <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">

                    <div class="col-md-12 col-lg-12" style="padding:0px;">
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif 
				  </div>
				  </div>
	
				<div class="input-group mb-12">
						  <label for="inputEmail" style="width:100%;">Password <span style="color:#a60109;">( 0000 )</span></label>

                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                          </div>
                       <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  
                    <div class="col-md-12 col-lg-12" style="padding:0px;">
                   @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif 
				  </div>

				  </div>
				  

                 </br>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>

  </div>
</div>

</body>
</html>
