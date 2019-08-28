@extends ('layout.main')

@section('index-content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Logs</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Logs ID</th>
                        <th>Who Performed</th>
                        <th>Action Performed</th>
                        <th>Date</th>
                      </tr>
                      @foreach($logs as $value)
                      <tr>
                        <td class="font-weight-600">{{$value['id']}}</td>
                        <td><div class="badge badge-warning">{{$value['employee']}}</div></td>
                        <td>{{$value['action']}}</td>
                        <td>{{$value['action_time']}}</td>  
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