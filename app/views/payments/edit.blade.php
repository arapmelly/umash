@extends('layouts.erp')

<script type="text/javascript">
 function totalBalance() {
      var instals = document.getElementById("instalments").value;
      var amt = document.getElementById("amount").value;
      var total = (instals * amt);
      document.getElementById("balance").value = total;
}

</script>

@section('content')

<br><div class="row">
  <div class="col-lg-12">
  <h3>Update Payment</h3>

<hr>
</div>  
</div>


<div class="row">
  <div class="col-lg-5">

    
    
     @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

     <form method="POST" action="{{{ URL::to('payments/update/'.$payment->id) }}}" accept-charset="UTF-8">
   
    <fieldset>
        
        <div class="form-group">
            <label for="username">Order Number</label><span style="color:red">*</span> :
           <select name="order" class="form-control">
                           <option></option>
                           @foreach($erporders as $erporder)
                            <option value="{{$erporder->erporder_id}}"<?= ($payment->erporder_id==$erporder->erporder_id)?'selected="selected"':''; ?>> {{$erporder->order_number}}</option>
                           
                           @endforeach
                        </select>
        </div>

        <div class="form-group">
            <label for="username">Amount Paid<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="amount" id="amount" value="{{$payment->amount_paid}}">
        </div>

       <!--  <div class="form-group">
            <label for="username">Receipt Number :</label>
            <input class="form-control" placeholder="" type="text" name="receipt" id="receipt" value="{{$payment->receipt_no}}">
        </div> -->

        <div class="form-group">
            <label for="username">Received By :</label>
            <input class="form-control" placeholder="" type="text" name="received_by" id="received_by" value="{{$payment->received_by}}">
        </div>

         <div class="form-group">
                        <label for="username">Date</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="pay_date" id="pay_date" value="{{date('d-M-Y',strtotime($payment->date))}}">
                        </div>
          </div>

        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Update Payment</button>
        </div>

    </fieldset>
</form>
    

  </div>

</div>

@stop