@extends ('layout.main')

@section('index-content')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{ url('/stisla/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Employee Information</h4></div>

              

              <div class="card-body">
                <form method="POST">
                    {{csrf_field()}}
                 <div class="form-group">
                    <label>Employee ID: </label>
                    <label> {{$user['eid']}}</label>
                    </div>
               
               <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Email: </label>
                     <label> {{$user['email']}}</label>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name: </label>
                      <label> {{$user['ename']}}</label>
                    </div>
                    
                  </div>

                  

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Contact: </label>
                     <label> {{$user['contact']}}</label>
                    </div>
                    <div class="form-group col-6">
                      <label>Address: </label>
                      <label> {{$user['address']}}</label>
                    </div>
                  

                  
                    <div class="form-group col-6">
                      <label>Salary: </label>
                      <label> {{$user['esalary']}}</label>
                    </div>
                    
                    </div>

                  
                  <h3>Are you sure?</h3>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="delete" value="Confirm">
                      
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