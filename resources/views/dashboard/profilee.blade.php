@extends ('layout.main')

@section('index-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, {{$user[0]->ename}}</h2>
            

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="{{ url('/stisla/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{$user[0]->ename}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    Hello I'm Romynul, A Professional Web Developer and Designer.My Top Priority is Client Satisfaction and I work hard for what I get paid for.Try My Service,You won't regret. I provide full satisfaction.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Romynul</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                   <div class="card-body">
                <form method="POST">
                    {{csrf_field()}}
                <div class="row">
                 <div class="form-group col-6">
                    <label>Employee ID: </label>
                    <input type="text" class="form-control" value="{{$user[0]->eid}}" required="" name="eid" readonly>
                    </div>
               
              
                    <div class="form-group col-6">
                      <label for="name">Email: </label>
                      <input type="text" class="form-control" value="{{$user[0]->email}}" required="" name="email">
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name: </label>
                      <input type="text" class="form-control" value="{{$user[0]->ename}}" required="" name="ename">
                    </div>
                    

                    <div class="form-group col-6">
                      <label>Contact: </label>
                      <input type="text" class="form-control" value="{{$user[0]->contact}}" required="" name="contact">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Address: </label>
                      <input type="text" class="form-control" value="{{$user[0]->address}}" required="" name="address">
                    </div>
                  
                    <div class="form-group col-6">
                      <label>Salary: </label>
                      <input type="text" class="form-control" value="{{$user[0]->esalary}}" required="" name="esalary">
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="delete" value="Update">
                      
                    </input>
                  </div>
                 
                </form>
              </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  @stop