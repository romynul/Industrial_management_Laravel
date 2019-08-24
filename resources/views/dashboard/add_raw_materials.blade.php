@extends ('layout.main')

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
              <div class="card-header"><h4>Raw Materials</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Material Name</label>
                      <input id="name" type="text" class="form-control" name="materialName" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Count</label>
                      <input type="text" class="form-control" name="count">
                    </div>
                    
                  </div>

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Supplier Name</label>
                      <input type="text" class="form-control" name="supplierName">
                    </div>
                    <div class="form-group col-6">
                      <label>Supplier Id</label>
                      <input type="text" class="form-control" name="supplierId">
                    </div>
                   

                  
                    <div class="form-group col-6">
                      <label>Unit Price</label>
                      <input type="text" class="form-control" name="unitPrice">
                    </div>
                   </div>
                 
                  
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Add To List
                    </button>
                  </div>
                  <div>
                    <button type="cancle" class="btn btn-secondary btn-lg btn-block" name="cancel">
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

  <!-- General JS Scripts -->
  @stop