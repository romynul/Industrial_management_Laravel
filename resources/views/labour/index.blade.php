@extends ('layout.mainAccountant')

@section('index-content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Invoices</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Expertise</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                        @foreach($labour as $value)
    <tr>
      <td>{{$value['lid']}}</td>
      <td>{{$value['lname']}}</td>
      <td>{{$value['laddress']}}</td>
      <td>{{$value['lcontact']}}</td>
      <td>{{$value['expertise']}}</td>
      <td>{{$value['salary']}}</td>

      <td>
        <a href="{{route('accountant.edit_labour', $value['lid'])}}">Edit</a> |
        <a href="{{route('accountant.delete_labour', $value['lid'])}}">Delete</a> 
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