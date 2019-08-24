@extends ('layout.manager')

@section('index-content')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Supplier List</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Supplier ID</th>
                        <th>Supplier Name</th>
                        <th>Owner Name</th>
                         <th>Address</th>
                        <th>Contact</th>
                        <th>Details</th>
                        <th>Total Buy</th>
                        <th>Balance</th>
                        <th>Action</th>
                      </tr>


                       @foreach($supplier as $value)
                        <tr>
                          <td class="font-weight-600">{{$value['sid']}}</td>
                          <td><div class="badge badge-warning">{{$value['sname']}}</div></td>
                          <td>{{$value['cowner']}}</td>
                          <td>{{$value['address']}}</td>
                          <td>{{$value['contact']}}</td>
                          <td>{{$value['details']}}</td>
                          <td>{{$value['tbuy']}}</td>
                          <td>{{$value['balance']}}</td>
                          <td>
                            <a href="{{route('manager.edit_supplier', $value['sid'])}}" class="btn btn-primary">Edit</a> 
                            <a href="{{route('manager.delete_supplier', $value['sid'])}}" class="btn btn-primary">Delete</a> 
                            
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