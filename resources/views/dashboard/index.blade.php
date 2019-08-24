@extends ('layout.main')

@section('index-content')
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                   <canvas id="sales-chart" height="80"></canvas>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           <!-- <%= projectList[0].total%> -->
                           180
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total_buy</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                            234534
                           <!-- <%= projectList[0].total_price%> -->
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                   <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Due</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                            1890
                           <!-- <%= projectList[0].balance%> -->
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Supplies-->
          
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                   <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Supplies</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Price</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Amount Due</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Profit-->

           <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <canvas id="sales-chart" height="80"></canvas>
                   <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Profit</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>               
                </div>
              </div>
            </div>

              <!--Expense-->

            <div class="col-lg-6 col-md-4 col-sm-12">
             <div class="card card-statistic-2">
                <div class="card-stats">
                <canvas id="sales-chart" height="80"></canvas>
                   <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Expense</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>               
                </div>
              </div>
            </div>
          </div>

@stop