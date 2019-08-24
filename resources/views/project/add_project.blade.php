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
              <div class="card-header"><h4>Add Project</h4></div>

              <div class="card-body">
                <form method="POST" >
                   {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Project Name</label>
                      <input id="name" type="text" class="form-control" name="pname" autofocus>
                    </div>
                   
                     <div class="form-group col-6">
                      <label>Client Name</label>
                      <input type="text" class="form-control" name="client">
                    </div>
                    
                  </div>


                   

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-4">
                      <label>Total Cost</label>
                      <input type="text" class="form-control" name="tcost">
                    </div>

                    <div class="form-group col-4">
                      <label>Amount Paid</label>
                      <input type="text" class="form-control" name="paid">
                    </div>

                    <div class="form-group col-4">
                      <label>Estiamted Cost</label>
                      <input type="text" class="form-control" name="ecost">
                    </div>


                    <div class="form-group col-6">
                      <label>Project Details</label>
                      
                       <input type="text" class="form-control" name="details" style="height:300px;width:679px;font-size:14pt;">
                      <!-- <textarea rows="4" cols="50" name="details" class="form-control" form="client_add" style="height:300px;width:679px;font-size:14pt;" ></textarea> -->

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

 @stop