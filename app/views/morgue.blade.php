@extends('layouts.morgue')
@section('content')
<br><br/>
<div class="row">
                      <div class="col-md-3">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('enquiries')}}">
                          <i class="fa fa-barcode fa-2x"></i>
                          <div>Manage Enquiries</div>
                          
                        </a>
                      </div>

                      <div class="col-md-3">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('admissions')}}">
                          <i class="fa fa-user fa-2x"></i>
                          <div>Manage Admissions </div>
                          
                        </a>
                      </div>


                      <div class="col-md-3">
                        <a class="btn btn-default btn-icon input-block-level" href="{{URL::to('bookings')}}">
                          <i class="glyphicon glyphicon-list fa-2x"></i>
                          <div>Manage Bookings</div>
                          
                        </a>
                      </div>

                     


                      <div class="col-md-3">
                        <a class="btn btn-default btn-icon input-block-level" href="{{URL::to('cars')}}">
                          <i class="fa fa-ambulance fa-2x"></i>
                          <div>Manage Cars</div>
                          
                        </a>
                      </div>


                     



                      


                       

                      
                    </div>


<br><br>
<hr>
<div class="row">
              						
<div class="col-lg-2"></div>
	<div class="col-lg-2">

		

		<br><br>
		<img src="{{asset('images/umash.jpg')}}">
    
	</div>


</div>

@stop