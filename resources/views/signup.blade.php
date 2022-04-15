@extends('layouts.home')

@section('container')

<section style="padding-top: 7rem;">
    <div class="bg-holder">
    </div>

    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                <form action="/signup" method="post">
                  @csrf
                    <div class="form-floating mb-3">
                        <input type="name" name="name" class="form-control" id="fullName" >
                        <label for="floatingInput">Full Name</label>
                      </div>
                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" >
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" >
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="phone" name="phone" class="form-control" id="phoneNumber" >
                    <label for="floatingInput">Phone Number</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="usia" name="usia" class="form-control" id="usia" >
                    <label for="floatingInput">Usia</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="motto" name="motto" class="form-control" id="motto" >
                    <label for="floatingInput">Motto Hidup</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="kode" name="kode" class="form-control" id="kode" >
                    <label for="floatingInput">Kode Admin</label>
                  </div>
                  <div class="form-floating mb-3">
                  <label for="exampleInputEmail1"
                                    class="form-label">Status</label>
                                <select class="form-select" name="status"
                                    aria-label="Default select example">
                                    <option selected>
                                    </option>
                                    <option value="Single">Single</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                  </div>
                  

                  <div class="d-grid">
                    <button class="btn btn-info btn-login text-uppercase fw-bold" type="submit">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
