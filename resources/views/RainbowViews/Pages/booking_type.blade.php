
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
										
									
											@csrf
											<input type="hidden" name="price" value="20" >
											<button class="btn btn-success" onclick="postBookingType()">
												Pay Later
												</button>
										<button  class="btn btn-primary" onclick="postBookingTypePaypal()" >
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paypal" viewBox="0 0 16 16">
												<path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.351.351 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91.379-.27.712-.603.993-1.005a4.942 4.942 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.687 2.687 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.695.695 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016c.217.124.4.27.548.438.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.873.873 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.352.352 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32.845-5.214Z"/>
											  </svg>
                                                PayPal
										</button>
									    
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
