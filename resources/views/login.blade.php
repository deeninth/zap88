@extends('layouts.app')

@section('content')

<div class="container">
<div class="pt-5"></div>

<div class="d-flex justify-content-center align-items-center pt-5" style="text-align: center;">
    <div class="card card-gtr w-50">
        <div class="card-body p-5">
            <h1 class="pb-5"> เข้าสู่ระบบ </h1>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">U</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-lg pt-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">P</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
              </div>


            <button type="button" class="btn btn-login btn-lg btn-block">เข้าสู่ระบบ</button>
        </div>
      </div>   
</div>


 


</div>

@endsection
