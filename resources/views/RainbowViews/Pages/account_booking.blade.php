<style>
    body {
        background-color: #f2f6fc;
        color: #69707a;
    }

    .img-account-profile {
        height: 10rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
        font-weight: 500;
    }

    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }

    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .fa-2x {
        font-size: 2em;
    }

    .table-billing-history th,
    .table-billing-history td {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 1.375rem;
        padding-right: 1.375rem;
    }

    .table> :not(caption)>*>*,
    .dataTable-table> :not(caption)>*>* {
        padding: 0.75rem 0.75rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .border-start-primary {
        border-left-color: #0061f2 !important;
    }

    .border-start-secondary {
        border-left-color: #6900c7 !important;
    }

    .border-start-success {
        border-left-color: #00ac69 !important;
    }

    .border-start-lg {
        border-left-width: 0.25rem !important;
    }

    .h-100 {
        height: 100% !important;
    }
</style>
<br>
<div class="container">
    <nav class="nav nav-borders" style="margin-top: 130px">
        <a class="nav-link ms-0" href="/rainbow/account_details/{{ $id }}">Profile</a>
        <a class="nav-link active" href="/rainbow/account_booking/{{ $id }}">Booking</a>
        <a class="nav-link" href="/rainbow/account_promotion/{{ $id }}">Promotion</a>
        {{-- <a class="nav-link" href="">Notifications</a> --}}
    </nav>
    <hr class="mt-0 mb-4">
    <div class="card-header">Booking History</div>
    <div class="card-body p-0">
        <!-- Billing history table-->
        <div class="table-responsive table-billing-history">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="border-gray-200" scope="col">Booking ID</th>
                        <th class="border-gray-200" scope="col">Order Time</th>
                        <th class="border-gray-200" scope="col">Ticket</th>
                        <th class="border-gray-200" scope="col">All Price</th>
                        <th class="border-gray-200" scope="col">Status</th>
                        <th class="border-gray-200" scope="col">View Booking Detail</th>
                        {{-- <th class="border-gray-200" scope="col">Status</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($danhsach as $userBookings)
                        <tr>
                            <td>{{ $userBookings->Id }}</td>
                            <td>{{ $userBookings->OrderTime }}</td>
                            <td>

                                <ul>

                                    @foreach ($userBookings->tickets as $Ticket)
                                        <li>
                                            <br>
                                            Id: {{ $Ticket->Id }} <br>
                                            Price: {{ $Ticket->Price }}<br>
                                            Movie: {{ $Ticket->showtime->movie->Name }}<br>
                                            Cinema Name: {{ $Ticket->showtime->cinema->Name }}<br>
                                            Cinema Address: {{ $Ticket->showtime->cinema->Address }}<br>
                                            Room: {{ $Ticket->showtime->room->Name }}<br>
                                            <br>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $userBookings->AllPrice }}</td>
                            @if ($userBookings->Status == 0)
                                <td>Chưa thanh toán</td>
                            @else
                                <td>Đã thanh toán</td>
                            @endif
                            <td> <button type="button" class="btn btn-success" > <a  style="color: #fff" href="/rainbow/confirmation_screen/{{$userBookings->Id}}">View</a> </button> </td>
                            {{-- <td><span class="badge bg-light text-dark">Pending</span></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
