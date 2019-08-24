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
              <div class="card-header"><h4>Edit Expense History</h4></div>

              

              <div class="card-body">
                <form onsubmit="validate()" method="POST">
               @csrf
                  <div class="row">

                    <div class="form-group col-6">
                      <label>Id : </label>
                      <label>{{$expense['eid']}}</label>
                    </div>

                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Date : </label>
                     <label>{{$expense['edate']}}</label>

                    </div>
                    </div>


                    <div class="row">
                    <div class="form-group col-6">
                      <label for="name">purpose</label>
                      <input id="userName" type="text" class="form-control" name="purpose"  value="{{$expense['purpose']}}" autofocus>
                    </div>
                    
                  </div>


                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Details</label>
                      <input type="text" class="form-control" name="details"  value="{{$expense['details']}}">
                    </div>
                    <div class="form-group col-6">
                      <label>Amount</label>
                      <input type="text" class="form-control" name="expenseAmount"  value="{{$expense['amount']}}">
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
  