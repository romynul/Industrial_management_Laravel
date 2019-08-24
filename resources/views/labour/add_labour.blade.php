@extends ('layout.mainAccountant')

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
              <div class="card-header"><h4>Labour Registration</h4></div>

              <div class="card-body">
                <form onsubmit="validate() method="POST">

                 {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Labour Name</label>
                      <input id="name" type="text" class="form-control" name="labourName" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Labour Address</label>
                      <input type="text" class="form-control" name="labourAddress">
                    </div>
                    
                  </div>

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Labour Contact</label>
                      <input type="text" class="form-control" name="labourContact">
                    </div>
                   

                    <div class="form-group col-6">
                      <label>Labour Experties</label>
                      <input type="text" class="form-control" name="labourExperties">
                    </div>
                    <div class="form-group col-6">
                      <label>Labour Salary</label>
                      <input type="text" class="form-control" name="labourSalary">
                    </div>
                    </div>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Register
                    </button>
                  </div>
                  <div>
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