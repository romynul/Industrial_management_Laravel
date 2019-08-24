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
              <div class="card-header"><h4>Delete Supplier Information</h4></div>

              

              <div class="card-body">
                <form s method="POST">
                    {{csrf_field()}}
                 <div class="form-group">
                    <label>Supplier ID:</label>
                    <label> {{$supplier['sid']}}</label>
                    </div>
               
               <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Supplier Name:</label>
                     <label> {{$supplier['sname']}}</label>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Company Owner:</label>
                      <label> {{$supplier['cowner']}}</label>
                    </div>
                    
                  </div>

                  

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Contact:</label>
                     <label> {{$supplier['contact']}}</label>
                    </div>
                    <div class="form-group col-6">
                      <label>Address:</label>
                      <label> {{$supplier['address']}}</label>
                    </div>
                  

                  
                    <div class="form-group col-6">
                      <label>Details:</label>
                      <label> {{$supplier['details']}}</label>
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