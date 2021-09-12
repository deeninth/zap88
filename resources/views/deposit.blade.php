@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-deposit">
        <div class="card-body p-4">
      <div class="text-head-deposit">เงินไปที่บัญชีด้านล่างนี้ </div>
      <div class="text-rule-deposit">ระบบฝากขั้นต่ำ 300 บาท </div>
      <div class="text-rule-deposit">ห้ามโอนช่วงเวลา 23:00 - 23:59 น. </div>

      <div class="kasikorn-deposit p-2">ธนาคาร กสิกรไทย</div>
      <div class="row bank-deposit pt-2">
    <div class="col-sm ">
      <div>เลขที่บัญชี <div class="text-number-bank">00-000-000-00</div></div>
    </div>
    <div class="col-sm">
    <div>ชื่อบัญชี <div class="text-number-bank">xxxxxxxxxxx</div></div>
    </div>
  </div>

  <button type="button" class="btn btn-copy btn-lg btn-block d-flex justify-content-between bd-highlight"><i class="fas fa-copy"></i><span>คัดลอกเลขบัญชี</span><span></span></button>
              

        </div>
      </div>   



 


</div>
</div>
<footer>
<div class="container">
<div class="row ">
    <div class="col d-flex justify-content-center pt-2">
    <button type="button" class="btn btn-deposit-footer btn-lg btn-block d-flex justify-content-between"><i class="fas fa-dollar-sign "></i><span>  ฝากเงิน</span><span></span></button>
    </div>
    <div class="col d-flex justify-content-center pt-2">
    <button type="button" class="btn btn-play-footer btn-lg btn-block d-flex justify-content-between"><i class="far fa-play-circle"></i> <span>  เข้าเล่นเกม</span><span></span></button>
    </div>
    <div class="col d-flex justify-content-center pt-2">
    <button type="button" class="btn btn-withdrawal-footer btn-lg btn-block d-flex justify-content-between"><i class="fas fa-hand-holding-usd"></i><span>  ถอนเงิน</span><span></span></button>
    </div>
    
  </div>
</div>
</footer>
@endsection
