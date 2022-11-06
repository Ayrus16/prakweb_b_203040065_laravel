@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
          
              

              <div class="form-floating">
                <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="username">
                <label for="name">Name</label>
              </div>

              <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                <label for="username">Username</label>
              </div>

              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="text-center d-block mt-3">Already Registered? <a href="/register">Login!</a></small>
          </main>
    </div>
</div>

@endsection