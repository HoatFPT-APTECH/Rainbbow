
	<!-- st top header Start -->
	<div class="st_bt_top_header_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="st_bt_top_back_btn float_left">	<a href="index.html"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="st_bt_top_center_heading float_left">
						<h3> {{$movie->Name}} - <span class="time_hours"> {{$showTime->Start}} </span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st top header Start -->
	<!-- st dtts section Start -->
	<div class="st_dtts_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="st_dtts_left_main_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_dtts_ineer_box float_left">
									<ul>
										<li><span class="dtts1">Date</span>  <span class="dtts2" id="time_date">19-Dec-2022</span>
										</li>
										<li><span class="dtts1">Time</span>  <span class="dtts2 time_hours">10:00PM</span>
										</li>
										<li><span class="dtts1">Cinema</span>  <span class="dtts2"> {{$showTime->cinema->Name}} </span>
										</li>
										<li><span class="dtts1">Seat</span>  <span class="dtts2">
										({{sizeof($seats)}} Tickets ) <br/> 
											@foreach ($seats as $s )
												{{$s->seatCategory->Name=="D"?"	ECONOMY -":'PLANTINUM-'}} {{$s->Name}} <br/>
											@endforeach
											
							
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_section float_left">
									<div class="st_cherity_img float_left">
										<img src="{{$movie->photos[0]->Src}}" alt="img">
									</div>
									
								</div>
							</div>
							{{-- <div class="col-md-12">
								<div class="st_cherity_btn float_left">
								
									<ul>
										
										<li class="mt-5"><a href="confirmation_screen.html">Proceed to Pay </a>
										</li>
									</ul>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="st_dtts_bs_wrapper float_left">
								<div class="st_dtts_bs_heading float_left">
									<p>Booking summary</p>
								</div>
								<div class="st_dtts_sb_ul float_left">
									<ul>
										<li>
											Order Name : <span> {{$user->Name}}  </span>
											<br/>Phone: <span> {{$user->Phone}} </span>
										</li>
										<li>
                                           Movie Name: <span> {{$movie->Name}} </span>
                                

										</li>
										<li>Tickets: <span>({{sizeof($seats)}} Tickets ) </span>
											<br>
									
											@foreach ($seats as $s )

											  <div style="padding-left: 20px" > {{$s->seatCategory->Name=="D"?"	ECONOMY -":'PLANTINUM-'}} {{$s->Name}} <span> $ <i class="ticket_price">{{($movie->Price)*($s->seatCategory->Coefficient)}}</i> </span> </div>
											
										
										@endforeach
											
											
										  Total: 	<span > $ <b id="total_price">200</b> </span>
										</li>
										<li id="liVoucher">Voucher code: <span id="codeVoucher">....</span> <br>
											
										</li>
										
									</ul>
									
								</div>
								<div class="st_dtts_sb_h2 float_left">
								     
									<h3>Sub total <span id="subTotal" >Rs.860.80</span></h3>
								    <div class="">
										Add Voucher :<br/> <input class="form-group" type="text" placeholder="Input Voucer key">
										<span>  
											<button class="btn btn-primary" onclick="checkVoucher()" >Add</button>
										</span>
									</div>
									<div>   
										<button class="btn btn-warning" onclick="postBookingType()">
                                        PROCESS TO PAY
										</button><br><br>
										<form action={{url('/rainbow/vnpay_payment')}} method="post">
											@csrf
											<input type="hidden" name="total" value="{{($movie->Price)*($s->seatCategory->Coefficient)}}">
										<button type="submit" name="redirect" class="btn btn-warning" >PAY VNPAY</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<meta name='data' content="{{ $dataJson }}" />
