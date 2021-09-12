@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-gtr">
        <div class="card-body p-4">
        <div class="row">
    <div class="col-sm">
      <div class="credit-das pl-4 pr-4 pt-3 pb-3">
        
      <div class="d-flex justify-content-between">
      <div class="credit-text">
      <i class="fas fa-wallet"></i> เครดิตของคุณ
      </div>
      <div>
      <i class="fas fa-sync-alt fa-2x"></i>
      </div>
 </div>
 <hr>
 <div class="credit-main">999,999.09 ฿</div>
 <div class="credit-footer">ทำรายการล่าสุด 00:00:00 / 00:00น.</div>
      </div>
    </div>
    <div class="col-sm">
    <button type="button" onclick="location.href='{{ route('deposit') }}'"  class="btn btn-deposit-main btn-lg btn-block d-flex justify-content-between bd-highlight"><i class="fas fa-dollar-sign "></i><span>ฝากเงิน</span><span></span></button>
    <button type="button" onclick="location.href='{{ route('withdrawal') }}'" class="btn btn-withdrawal-main btn-lg btn-block d-flex justify-content-between bd-highlight"><i class="fas fa-hand-holding-usd"></i><span>ถอนเงิน</span><span></span></button>

    </div>
  </div>

  <div class="border-main p-2 mt-3 d-flex justify-content-center">
    ระดับสมาชิกของคุณ 

  </div>
  <div class="p-2 mt-3 mb-3 d-flex justify-content-center">
  <button type="button" class="btn btn-play-main btn-lg pb-3 pt-3"><i class="far fa-play-circle"></i> <span> เข้าเล่นเกม</span></button>
 
  </div>
  <div class="row">
   
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
      <div class="card-menu p-3">
      <i class="fas fa-users fa-5x"></i>
      <div>แนะนำเพื่อน</div>
     
      </div>
    </a>

    <a href="{{ route('wallethistory') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-history fa-5x"></i>
      <div>ประวัติเดิมเงิน</div>
     
      </div>
    </a>
    <a href="{{ route('vip') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-people-arrows fa-5x"></i>
      <div>ระดับสมาชิก</div>
     
      </div>    
    </a>
    
  </div>


  <div class="row pt-3">
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
      <div class="card-menu p-3">
      <i class="fas fa-gamepad fa-5x"></i>
      <div>ล้อหมุนโชค</div>
     
      </div>
    </a>
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-percentage fa-5x"></i>
      <div>คืนยอดเสีย</div>
     
      </div>
    </a>
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-gift fa-5x"></i>
      <div>โปรโมชั่น</div>
     
      </div>    
    </a>
    
  </div>

  <div class="row pt-3">
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
      <div class="card-menu p-3">
      <i class="fas fa-cogs fa-5x"></i>
      <div>เปลี่ยนรหัสผ่าน</div>
     
      </div>
    </a>
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-dice fa-5x"></i>
      <div>ประวัติการเล่น</div>
     
      </div>
    </a>
    <a href="{{ route('aff') }}" class="col-sm-6 col-lg">
    <div class="card-menu p-3">
    <i class="fas fa-user-tag fa-5x"></i>
      <div>ข้อมูลส่วนตัว</div>
     
      </div>    
    </a>
    
  </div>


              

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
    <button type="button" class="btn btn-withdrawal-footer btn-lg btn-block d-flex justify-content-between"><i class="fas fa-hand-holding-usd"></i><span>  ถอนเงิน</span><span></span></button>
    </div>
    
  </div>
</div>
</footer>
@endsection
