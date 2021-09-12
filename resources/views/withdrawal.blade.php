@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-deposit">
        <div class="card-body p-4">
      <div class="text-head-deposit">ถอน </div>

      <div class="row bank-deposit pt-2">
    <div class="col-sm ">
    <div class="credit-wit pl-4 pr-4 pt-3 pb-3">
        
        <div class="d-flex justify-content-between">
        <div class="credit-text-wit">
         เครดิตของคุณ
        </div>
        <div>
        <i class="fas fa-sync-alt fa-1x"></i>
        </div>
   </div>
   <hr>
   <div class="credit-main-wit">999,999.09 ฿</div>
   <div class="credit-footer-wit">ทำรายการล่าสุด 00:00:00 / 00:00น.</div>
        </div>
    </div>
    <div class="col-sm">
    <div class="credit-wit pl-4 pr-4 pt-3 pb-3">
        
        <div class="d-flex justify-content-between">
        <div class="credit-text-wit">
         ต้องมียอดเทิร์น
        </div>
        <div>
        <i class="fas fa-sync-alt fa-1x"></i>
        </div>
   </div>
   <hr>
   <div class="credit-main-wit">999,999.09 ฿</div>
   <div class="credit-footer-wit">ทำรายการล่าสุด 00:00:00 / 00:00น.</div>
        </div>    
      
      </div>


  </div>

              <div class="text-center fs20 pt-3">ระบุจำนวนเงินที่จะถอน</div>

      <input class="form-control bg-input-wit " type="text" >

      <button type="button" class="btn btn-withdrawal-main btn-lg btn-block d-flex justify-content-between mt-2"><i class="fas fa-hand-holding-usd"></i><span>ยืนยันถอนเงิน</span><span></span></button>

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
