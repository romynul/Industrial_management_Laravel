@extends ('layout.manager')

@section('index-content')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Employee Information</h4></div>

              

              <div class="card-body">
                <form onsubmit="validate()" method="POST">
                    {{csrf_field()}}
                 <div class="form-group">
                    <label>Employee ID:</label>
                    <label> {{$user['eid']}}</label>
                    </div>
               
               <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Email</label>
                      <input id="userName" type="text" class="form-control" name="email"  value="{{$user['email']}}" autofocus>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="userName" type="text" class="form-control" name="ename"  value="{{$user['ename']}}" autofocus>
                    </div>
                    
                  </div>

                  

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Contact</label>
                      <input type="text" class="form-control" name="contact"  value="{{$user['contact']}}">
                    </div>
                    <div class="form-group col-6">
                      <label>Address</label>
                      <input type="text" class="form-control" name="address"  value="{{$user['address']}}">
                    </div>
                  

                  
                    <div class="form-group col-6">
                      <label>Salary</label>
                      <input type="text" class="form-control" name="esalary"  value="{{$user['esalary']}}">
                    </div>
                    
                    </div>

                  

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      
                    </input>
                  </div>
                  <div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block" name="cancel">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

 @stop
  <script type="text/javascript">
    
    function validate()
    {
      var userName = document.getElementById("userName");
      var email = document.getElementById("email");
      var regexName =  /^[a-zA-Z ]{2,30}$/;
      var regexEmail =   /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      if(regexName.test(userName.value))
      {
        
      }
      else{
        alert("Please give valid name.....");
      }

      if(regexEmail.test(email.value))
      {
        
      }
      else{
        alert("Please give valid email.....");
      }




    }
  </script>

