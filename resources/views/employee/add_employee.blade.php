@extends ('layout.manager')

@section('index-content')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registration</h4></div>

              <div class="card-body">
                <form method="POST">
                 {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="ename" autofocus>
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Contact</label>
                      <input type="text" class="form-control" name="contact">
                    </div>
                    <div class="form-group col-6">
                      <label>Address</label>
                      <input type="text" class="form-control" name="address">
                    </div>
                  

                   <div class="form-group col-6">
                      <label>Job</label>
                      <select class="form-control selectric" name="type">
                        
                        <option value="Acountent">acountant</option>
                        <option value="Supervisor">supervisor</option>
                        
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Salary</label>
                      <input type="text" class="form-control" name="esalary">
                    </div>
                    </div>

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">
                      Register
                    </button>
                  </div>
                  <div>
                    <button  class="btn btn-secondary btn-lg btn-block" name="cancel">
                      Cancel
                    </button>
                  </div>
                </form>
                @foreach ($errors->all() as $error)
                   {{ $error }} <br>
                  @endforeach
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
@stop