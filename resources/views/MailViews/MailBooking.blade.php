<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="st_bcc_main_main_wrapper float_left">
        <div class="st_bcc_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Dear {{$user->Name}},<br>

                        We would like to express our sincere gratitude for using our online movie ticket booking service at http://Rainbow.com.vn .<br>
                         Below is the confirmation of your ticket booking:<br>
                         <br>
                        Booking ID: {{ $booking->Id }}<br>
                        Order Name: {{$user->Name}}<br>
                        Movie : {{ $movie->Name }}<br>
                        Date and Time: {{$showTime->Start}}<br>
                        Cinema Hall: {{$showTime->cinema->Name}} | Address:{{$showTime->cinema->Address}} <br>
                        Room: {{$showTime->room->Name}}<br>
                        Tickets: {{ sizeof($seats) }} TICKETS ( 
                        <span>
                            @foreach ($seats as $s)
                                {{ $s->seatCategory->Name == 'D' ? '	ECONOMY -' : 'PLANTINUM-' }}
                                {{ $s->Name }} |
                            @endforeach
                        </span>
                        )
                        <br>

                        Total Amount: ${{ $booking->AllPrice }}<br>
                        
                        <br>
                        Your ticket booking details have been successfully confirmed. Please present this email at our ticket counter before entering the cinema. If you have any questions or require further assistance, please don't hesitate to contact us at 02929929292 or hoatdfk2001@gmail.com .<br>
                        
                        We look forward to serving you at our movie theater, and we wish you an enjoyable movie experience. Thank you for choosing us!<br>
                        
                        Best regards,<br>
                         <i>Rainbow Entertaiment</i><br>
  <br>
                         <a style="background: #7008e0;color:white;border-radius: 5px; padding:5px;text-decoration: none " href="/rainbow">RAINBOW</a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>