@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-gtr">
        <div class="card-body p-4">
      <div class="text-center fs20">แนะนำเพื่อน </div>
     

      <div class="row text-center">
    <div class="col fs15">
      ลิ้งแนะนำ
    </div>
    <div class="col-6">
    <input class="form-control" type="text" >
  </div>
    <div class="col">
    <button type="button" class="btn btn-copy btn-lg btn-block d-flex justify-content-between bd-highlight"><i class="fas fa-copy"></i><span>คัดลอกลิ้ง</span><span></span></button>
    </div>
  </div>

  <div class="row text-center mt-4">
    <div class="col">
      <div class="bg-aff-menu"> 
        <div class="fs13"> ส่วนแบ่งรายได้ </div>
        <div class="fs17"> 5% </div>

      </div>
    </div>
    <div class="col">
    <div class="bg-aff-menu"> 
        <div class="fs13"> สมาชิกแนะนำ </div>
        <div class="fs17"> 0 </div>

      </div>    </div>
  </div>

  <div class="row text-center mt-2">
    <div class="col">
      <div class="bg-aff-menu"> 
        <div class="fs13"> รายได้ทั้งหมด </div>
        <div class="fs17"> 999,999฿ </div>

      </div>
    </div>
    <div class="col">
    <div class="bg-aff-menu"> 
        <div class="fs13"> จำนวนแทงทั้งหมด </div>
        <div class="fs17"> 999,999฿ </div>

      </div>    </div>
  </div>

  <div class="row text-center mt-2">
    <div class="col">
      <div class="bg-aff-menu"> 
        <div class="fs13"> รายได้คงเหลือ </div>
        <div class="fs17"> 999,999฿ </div>

      </div>
    </div>
    <div class="col">
    <div class="bg-aff-menu"> 
        <div class="fs13"> รายได้ทั้งหมด </div>
        <div class="fs17"> 999,999฿  </div>

      </div>    </div>
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
