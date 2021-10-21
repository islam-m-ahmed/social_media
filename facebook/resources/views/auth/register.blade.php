
@extends('auth.app')
@section('content')
    
<body>




<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <div class="card cardbox">
        <div class="card-header">Register</div>
        <div class="card-body">
      
          <!-- socail media group -->
          
          
	
          
          <div class="form-group">
            
            <form id="login-nav" method="post" role="form" class="form" accept-charset="UTF-8">

              <div class="form-group">
                <label class="sr-only">Full Name</label>
                <input type="text" id="reg_username" name="full_name" class="form-control"
                value="" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                <label class="sr-only">Username</label>
                <input type="text" id="reg_username" name="user_name" class="form-control"
                value="" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label class="sr-only">Email</label>
                <input type="email" id="reg_username" name="email" class="form-control"
                value="" placeholder="xxx@xxx.com" required>
              </div>

              <!-- password group -->
              <div class="form-group">
                
                <!-- password label -->
                <label class="sr-only">Password</label>
                <!-- password input -->
                <div class="input-group">
                  <input type="password" id="reg_userpassword" name="user_password" class="form-control" data-placement="bottom" data-toggle="popover" data-container="body"
				  data-html="true" value="" placeholder="Password" required>

                  
                </div>
                <!-- password progresbar -->
                <div class="progress mt-1" id="reg-password-strength">
                    <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    </div>
                  </div>
                <!-- password remember & results -->
                
                <!-- Password Rules -->

              <!-- password-confirm group -->
              <div class="form-group">

                <!-- password-confirm label -->
                <label class="sr-only">Password Confirm</label>
                <!-- password-confirm input -->
                <div class="input-group">
                  <input type="password" id="reg_userpasswordconfirm" class="form-control" data-placement="bottom" 
				  data-toggle="popover" data-container="body" data-html="true" placeholder="Password Confirm" required>

                  
                  
                </div>
                <!-- password-confirm error message -->
                           
		
       
              <!-- Submit -->
              <div class="form-group">
                <button id="reg_submit" name="submit"  value="1" class="btn btn-block btn-primary " disabled="disabled">Create user</button>
              </div>
             
		

            </form>
          </div>
		  
          <div class="login-or"><hr class="hr-or"></div>
		  <!-- Links -->
          <div class="bottom text-center">
            Are you user? <a href="#"><b>Login</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
@endsection
