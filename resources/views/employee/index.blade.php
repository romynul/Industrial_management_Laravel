@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
       <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Employee List</h4>
                
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Job Type</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>


                      @foreach($user as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['eid']}}</td>
                          <td><div class="badge badge-warning">{{$value['ename']}}</div></td>
                          <td>{{$value['email']}}</td>
                          <td>{{$value['address']}}</td>
                          <td>{{$value['contact']}}</td>
                          <td>{{$value['type']}}</td>
                          <td>{{$value['esalary']}}</td>
                          <td>
                            <a href="{{route('manager.edit_employee', $value['eid'])}}" class="btn btn-primary">Edit</a> 
                            <a href="{{route('manager.delete_employee', $value['eid'])}}" class="btn btn-primary">Delete</a> 
                            
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