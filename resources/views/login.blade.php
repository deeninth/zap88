@extends('layouts.app')

@section('content')
<div class="bg-login">
<div class="container ">
<div class="pt-5"></div>

<div class="d-flex justify-content-center align-items-center pt-5" style="text-align: center;">
    <div class="card card-gtr w-50">
        <div class="card-body p-5">
            <h1 class="pb-5"> เข้าสู่ระบบ </h1>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" aria-label="Large" placeholder="หมายเลขโทรศัพท์ 10 หลัก" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-lg pt-2 pb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-lock"></i></span>
                </div>
                <input type="text" class="form-control" aria-label="Large" placeholder="รหัสผ่าน" aria-describedby="inputGroup-sizing-sm">
              </div>

            <button type="button" class="btn btn-login btn-lg btn-block">เข้าสู่ระบบ</button>

        </div>
      </div>   
</div>


 


</div>
</div>
@endsection
