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
              <div class="card-header"><h4>Edit Project Information</h4></div>

              <div class="card-body">
                <form method="POST" id="project_add">
                   {{csrf_field()}}

                   <div class="form-group">
                    <label>Project ID:</label>
                    <label> {{$project['pid']}}</label>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Project Name</label>
                      <input id="name" type="text" class="form-control" name="pname" value="{{$project['pname']}}" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Client Name</label>
                      <input type="text" class="form-control" name="client" value="{{$project['client']}}">
                    </div>
                    
                  </div>

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-4">
                      <label>Total Cost</label>
                      <input type="text" class="form-control" name="tcost" value="{{$project['tcost']}}">
                    </div>

                    <div class="form-group col-4">
                      <label>Amount Paid</label>
                      <input type="text" class="form-control" name="paid" value="{{$project['paid']}}">
                    </div>

                    <div class="form-group col-4">
                      <label>Estimated Cost</label>
                      <input type="text" class="form-control" name="ecost" value="{{$project['ecost']}}">
                    </div>

                    <div class="form-group col-6">
                      <label>Status </label>
                      <input type="text" class="form-control" name="status" value="{{$project['status']}}">
                    </div>

                      </div>
                   

                 

                 

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="Update Project">
                      
                    </input>
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