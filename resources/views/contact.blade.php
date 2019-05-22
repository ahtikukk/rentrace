@extends('layouts.main')

@section('title','Contact')
    
@section('content')

<div class="container">
        <br>
        <div class="row">
          <div class="col">
            <h5>If you are planning on visiting us it’s advisable to call ahead for and appointment. Or just drop a message.</h5>
            <div class="row">  
              <div class="col">
                  <h4>Address</h4>
                  <p>3611 Some Address Here 927<br>
                      Some City, PY 20061</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>Phone</h4>
                <p>+1 (234) 567 89 00</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>Email</h4>
                <p>mywebsite@website.com</p>
              </div>
            </div>
          </div>
          <div class="col">
            <form action="#">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your full name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
              </div>
              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Type your message here"></textarea>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form><br>
          </div>
        </div>
      </div>

@endsection