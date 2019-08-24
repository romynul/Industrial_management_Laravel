@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Project List</h4>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Details</th>
                        <th>Client</th>
                        
                        <th>Total Price</th>
                        <th>Paid</th>
                        <th>Estimated Cost</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>

                        @foreach($project as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['pid']}}</td>
                          <td><div class="badge badge-warning">{{$value['pname']}}</div></td>
                          <td>{{$value['details']}}</td>
                          <td>{{$value['client']}}</td>
                          <td>{{$value['tcost']}}</td>
                          <td>{{$value['paid']}}</td>
                          <td>{{$value['ecost']}}</td>
                          <td>{{$value['status']}}</td>
                          
                          <td>
                            <a href="{{route('manager.edit_project', $value['pid'])}}" class="btn btn-primary">Edit</a> 
                            <a href="{{route('manager.delete_project', $value['pid'])}}" class="btn btn-primary">Delete</a> 
                            
                          </td>
                        </tr>
                      @endforeach
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
        </div>
   @stop