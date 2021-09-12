@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-gtr">
        <div class="card-body p-4">

        <div class="text-center fs20">ระดับสมาชิกของคุณ</div>
        <div class="text-center fs30 lv-vip">VIP 1</div>

        <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="text-center fs10 mt-2">คะแนนปัจจุบัน <span class="lv-vip"> 8,430 </span> / 10,000</div>



        </div>
      </div>   


      <div class="card card-gtr mt-3">
        <div class="card-body p-4">
        <div class="text-center fs20">ระดับสมาชิก</div>

        <div class="row">
    <div class="col-sm">
     VIP 1
    </div>
    <div class="col-sm">
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
    </div>
    <div class="col-sm">
      0 - 10,001
    </div>
    <div class="col-sm">
      รับเครดิต <span class="lv-vip">300</span>
    </div>
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
    <button type="button" class="btn btn-play-footer btn-lg btn-block d-flex justify-content-between"><i class="far fa-play-circle"></i> <span>  เข้าเล่นเกม</span><span></span></button>
    </div>
    <div class="col d-flex justify-content-center pt-2">
    <button type="button" class="btn btn-withdrawal-footer btn-lg btn-block d-flex justify-content-between"><i class="fas fa-hand-holding-usd"></i><span>  ถอนเงิน</span><span></span></button>
    </div>
    
  </div>
</div>
</footer>
@endsection
