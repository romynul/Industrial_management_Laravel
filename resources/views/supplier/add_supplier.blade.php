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
              <div class="card-header"><h4>Add Supplier</h4></div>

              <div class="card-body">
                <form method="POST" id="supplier_add">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Supplier Name</label>
                      <input id="name" type="text" class="form-control" name="sname" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Supplier Address</label>
                      <input type="text" class="form-control" name="address">
                    </div>
                    
                  </div>

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label> Supplier Contact</label>
                      <input type="text" class="form-control" name="contact">
                    </div>

                    <div class="form-group col-6">
                      <label>Company Owner</label>
                      <input type="text" class="form-control" name="cowner">
                    </div>
                    <div class="form-group col-6">
                      <label>Product Details</label>
                      
                       <textarea rows="4" cols="50" name="details" class="form-control" form="supplier_add" style="height:300px;width:679px;font-size:14pt;"></textarea>


                    </div>
                   

                   
                    
                    
                    </div>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Add to list
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block" name="cancel">
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

  <!-- General JS Scripts -->
 @stop