@extends('layouts.dashboard')

@section('content')
<div class="">
<div class="container">
<div class="pt-5"></div>

    <div class="card card-gtr">
        <div class="card-body p-4">
      <div class="fs20">ประวัติการเงิน </div>
     

    

              

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
