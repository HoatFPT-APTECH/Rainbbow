<!-- color picker start -->
<!-- st top header Start -->
<div class="st_bt_top_header_wrapper float_left">
    <div class="container container_seat">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"> <a href="movie_booking.html"><i
                            class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
                </div>
                <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                    <p>Selected Ticket</p>
                    <div class="select_number">
                        
                        <input type="text" name="quantity" value="0" id="input-quantity"
                            class="form-control" />
                       
                    </div>
                    <input type="hidden" name="product_id" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                    <h3>{{ $showTime->movie->Name }} </h3>
                    <h4>Today, 19 Dec, 10:00 PM</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"> <a href="#"><i
                            class="fa fa-times"></i></a>
                </div>
                <div class="st_seatlay_btn float_left">
                    
                    <a href="booking_type.html" onclick="submitTicketChoose(event)" >Proceed to Pay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- st top header Start -->
<!-- st seat Layout Start -->
<div class="st_seatlayout_main_wrapper float_left">
    <div class="container container_seat">
        <div class="st_seat_lay_heading float_left">
            <h3>Cinema: {{ $showTime->cinema->Name }} | Room: {{ $showTime->room->Name }} </h3>

        </div>
        <div class="st_seat_full_container">
            <div class="st_seat_lay_economy_wrapper float_left">
                <div class="screen">
                    <img src="{{ $assetPathRainbow }}/images/content/screen.png">
                </div>
                <div class="st_seat_lay_economy_heading float_left">
                    <h3>Economy - ${{ $showTime->movie->Price * $listSeatD[1]->Coefficient }} </h3>
                </div>
                <div class="st_seat_lay_row float_left">
                    <ul>
                        <li class="st_seat_heading_row">D</li>
                        @for ($d = 0; $d < 5; $d++)
                            <li
                                class="{{ $listSeatD[$d]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatD[$d]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span> {{ $listSeatD[$d]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatD[$d]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatD[$d]->Id }}"
                                    {{ $listSeatD[$d]->Status != 0 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatD[$d]->Name }}">

                                </label>


                            </li>
                        @endfor

                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($d = 5; $d < 18; $d++)
                            <li
                                class="{{ $listSeatD[$d]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatD[$d]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatD[$d]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatD[$d]->Name }}"
                                    name="cb"
									 onchange="chooseSeat(this.value,this)"
                                    value="{{ $listSeatD[$d]->Id }}"
                                    {{ $listSeatD[$d]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatD[$d]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($d = 18; $d < 23; $d++)
                            <li
                                class="{{ $listSeatD[$d]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatD[$d]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatD[$d]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatD[$d]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatD[$d]->Id }}"
                                    {{ $listSeatD[$d]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatD[$d]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="st_seat_lay_economy_wrapper st_seat_lay_economy_wrapperexicutive float_left">
                <div class="st_seat_lay_economy_heading float_left">
                    <h3>Executive + 3d glasss - ${{ $showTime->movie->Price * $listSeatA[1]->Coefficient }} </h3>
                </div>
                <div class="st_seat_lay_row float_left">
                    <ul>
                        <li class="st_seat_heading_row">C</li>
                        @for ($c = 0; $c < 5; $c++)
                            <li
                                class="{{ $listSeatC[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatC[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span> {{ $listSeatC[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatC[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatC[$c]->Id }}"
                                    {{ $listSeatC[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatC[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 5; $c < 18; $c++)
                            <li
                                class="{{ $listSeatC[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatC[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatC[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatC[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatC[$c]->Id }}"
                                    {{ $listSeatC[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatC[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 18; $c < 23; $c++)
                            <li
                                class="{{ $listSeatC[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatC[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>
                                </span>


                                <input type="checkbox" id="{{ $listSeatC[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatC[$c]->Id }}"
                                    {{ $listSeatC[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatC[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="st_seat_lay_row float_left">
                    <ul>
                        <li class="st_seat_heading_row">B</li>
                        @for ($c = 0; $c < 5; $c++)
                            <li
                                class="{{ $listSeatB[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatB[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatB[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatB[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatB[$c]->Id }}"
                                    {{ $listSeatB[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatB[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 5; $c < 18; $c++)
                            <li
                                class="{{ $listSeatB[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatB[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatB[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatB[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatB[$c]->Id }}"
                                    {{ $listSeatB[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatB[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 18; $c < 23; $c++)
                            <li
                                class="{{ $listSeatB[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatB[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatB[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatB[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatB[$c]->Id }}"
                                    {{ $listSeatB[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatB[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="st_seat_lay_row float_left">
                    <ul>
                        <li class="st_seat_heading_row">A</li>
                        @for ($c = 0; $c < 5; $c++)
                            <li
                                class="{{ $listSeatA[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatA[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatA[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatA[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatA[$c]->Id }}"
                                    {{ $listSeatA[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatA[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 5; $c < 18; $c++)
                            <li
                                class="{{ $listSeatA[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatA[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatA[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatA[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatA[$c]->Id }}"
                                    {{ $listSeatA[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatA[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                    <ul class="st_eco_second_row">
                        @for ($c = 18; $c < 23; $c++)
                            <li
                                class="{{ $listSeatA[$c]->Status == 2 ? 'seat_disable' : '' }}
							{{ $listSeatA[$c]->Status == 1 ? 'seat_choosing' : '' }}
							">
                                <span>{{ $listSeatA[$c]->Name }}
                                </span>


                                <input type="checkbox" id="{{ $listSeatA[$c]->Name }}" name="cb"
                                    onchange="chooseSeat(this.value,this)" value="{{ $listSeatA[$c]->Id }}"
                                    {{ $listSeatA[$c]->Status == 1 ? 'disabled' : '' }}>
                                <label for="{{ $listSeatA[$c]->Name }}">

                                </label>


                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<meta name='data' content="{{ $showTime }}" />
