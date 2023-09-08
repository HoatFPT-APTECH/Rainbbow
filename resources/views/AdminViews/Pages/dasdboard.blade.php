<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">

        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Sales Activity</h3>
                        </div>
                    </div>
                </div>
                <div class="row sales-dashboard">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card dash-widget">
                            <img src="{{ $assethPathAdmin }}/img/icons/open-box.png" alt>
                            <a href class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            </div>
                            <h3>60 <span>Qty</span></h3>
                            <p>To be packed</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card dash-widget box-2">
                            <img src="{{ $assethPathAdmin }}/img/icons/delivery.png" alt>
                            <a href class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            </div>
                            <h3>1 <span>Pkag</span></h3>
                            <p>To be shipped</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card dash-widget box-3">
                            <img src="{{ $assethPathAdmin }}/img/icons/peop-del.png" alt>
                            <a href class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            </div>
                            <h3>3 <span>Pkag</span></h3>
                            <p>To be delivered</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card dash-widget box-4">
                            <img src="{{ $assethPathAdmin }}/img/icons/rescipt.png" alt>
                            <a href class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            </div>
                            <h3>4 <span>Pkag</span></h3>
                            <p>To be Invoiced</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row pro-chart">
            <div class="col-xl-6 col-sm-6 d-flex">
                <div class="card chart-wrap flex-fill">
                    <p>Order Overview</p>
                    <div id="order-overview"></div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card chart-wrap flex-fill">
                    <p>Profit Overview</p>
                    <div class="d-flex align-items-center">
                        <div id="profit-overview"></div>
                        <div class="profilt-avarage">
                            <div>
                                <h3>34%</h3>
                                <span>option 1</span>
                            </div>
                            <div>
                                <h3 class="blue-txt">29%</h3>
                                <span>option 2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row pro-chart">
            <div class="col-xl-6 col-sm-6 d-flex">
                <div class="card chart-wrap flex-fill">
                    <p>Order by channel</p>
                    <div class="d-flex align-items-center">
                        <div id="order-channel"></div>
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <p>Amazon</p>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip"
                                        title style="width: 100%" data-bs-original-title="85%"></div>
                                </div>
                                <span>85%</span>
                            </div>
                            <div class="progress-box">
                                <p>Facebook</p>
                                <div class="progress progress-xs progress-striped sky-blue">
                                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip"
                                        title style="width: 100%" data-bs-original-title="35%"></div>
                                </div>
                                <span>35%</span>
                            </div>
                            <div class="progress-box">
                                <p>Shopify</p>
                                <div class="progress progress-xs progress-striped yellow">
                                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip"
                                        title style="width: 100%" data-bs-original-title="55%"></div>
                                </div>
                                <span>55%</span>
                            </div>
                            <div class="progress-box">
                                <p>Email Marketing</p>
                                <div class="progress progress-xs progress-striped red">
                                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip"
                                        title style="width: 100%" data-bs-original-title="25%"></div>
                                </div>
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 d-flex">
                <div class="card chart-wrap sales-chart flex-fill">
                    <div class="chart-header">
                        <p>Sales Overview</p>
                        <h2 class="float-start">$12,519.00</h2>
                        <h3 class="float-end"><i class="fas fa-arrow-right"></i> 22%</h3>
                    </div>
                    <div class="chart-body">
                        <div id="sales-view"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row product-section">
            <div class="col-xl-6 col-sm-6 d-flex">
                <div class="card card-table card-table-top flex-fill">
                    <div class="card-header">
                        <h4 class="card-title m-b-0 float-start">PRODUCT DETAILS</h4>
                    </div>
                    <div class="card-body">
                        <div class="pro-details d-flex">
                            <div class="stock-details">
                                <div>
                                    <h4 class="low-active">low Stock Items <span>2</span></h4>
                                </div>
                                <div>
                                    <h4>All Item Group <span>2</span></h4>
                                </div>
                                <div>
                                    <h4>All Item <span>2</span></h4>
                                </div>
                            </div>
                            <div class="stock-chart">
                                <h3>Active Items</h3>
                                <div class="progress org">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">65%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 d-flex">
                <div class="card card-table card-table-top flex-fill">
                    <div class="card-header">
                        <h4 class="card-title m-b-0 float-start">TOP SELLING ITEMS</h4>
                        <a href class="nav-link dropdown-toggle float-end p-0" data-bs-toggle="dropdown"
                            aria-expanded="false">This Month </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Active</a>
                            <a class="dropdown-item" href="javascript:void(0)">Inactive</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row items-wrapper d-flex">
                            <div class="col-xl-3 col-sm-3 col-6 selling-wrap">
                                <img src="{{ $assethPathAdmin }}/img/product/item-01.png" alt>
                                <p>Plain T-Shirt</p>
                                <span>16 Sets</span>
                            </div>
                            <div class="col-xl-3 col-sm-3 col-6 selling-wrap">
                                <img src="{{ $assethPathAdmin }}/img/product/item-02.png" alt>
                                <p>Kids Dress</p>
                                <span>16 Sets</span>
                            </div>
                            <div class="col-xl-3 col-sm-3 col-6 selling-wrap">
                                <img src="{{ $assethPathAdmin }}/img/product/item-03.png" alt>
                                <p>Kids T-Shirt</p>
                                <span>16 Sets</span>
                            </div>
                            <div class="col-xl-3 col-sm-3 col-6 selling-wrap">
                                <img src="{{ $assethPathAdmin }}/img/product/item-04.png" alt>
                                <p>Shirt</p>
                                <span>16 Sets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row product-section">
            <div class="col-xl-4 col-sm-6 d-flex">
                <div class="card card-table card-table-top flex-fill">
                    <div class="card-header">
                        <h4 class="card-title m-b-0 float-start">PURCHASE ORDER</h4>
                        <a href class="nav-link dropdown-toggle float-end p-0" data-bs-toggle="dropdown"
                            aria-expanded="false">This Month </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Active</a>
                            <a class="dropdown-item" href="javascript:void(0)">Inactive</a>
                        </div>
                    </div>
                    <div class="card-body purch-order">
                        <div class="purch-details text-center border-btm">
                            <p>Quantity Ordered</p>
                            <h3>519.00</h3>
                        </div>
                        <div class="purch-details text-center">
                            <p>Total Cost</p>
                            <h3>$12,519.00</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-sm-6 d-flex">
                <div class="card card-table card-table-top flex-fill">
                    <div class="card-header">
                        <h4 class="card-title m-b-0 float-start">SALES ORDER</h4>
                        <a href class="nav-link dropdown-toggle float-end p-0" data-bs-toggle="dropdown"
                            aria-expanded="false">This Month </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Active</a>
                            <a class="dropdown-item" href="javascript:void(0)">Inactive</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive sales-table">
                            <table class="table custom-table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Channel</th>
                                        <th>Draft</th>
                                        <th>Confirmed</th>
                                        <th>Packed</th>
                                        <th>Shipped</th>
                                        <th>Invoiced</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Others</td>
                                        <td>0</td>
                                        <td>12</td>
                                        <td>5</td>
                                        <td>27</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Etsy</td>
                                        <td>1</td>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Shopify</td>
                                        <td>0</td>
                                        <td>43</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="notification-box">
            <div class="msg-sidebar notifications msg-noti">
                <div class="topnav-dropdown-header">
                    <span>Messages</span>
                </div>
                <div class="drop-scroll msg-list-scroll">
                    <ul class="list-box">
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item new-message">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <span class="message-time">1 Aug</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Tarah Shropshire </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Mike Litorus</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Catherine Manseau </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">D</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Domenic Houston </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">B</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Buster Wigton </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Rolland Webber </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Claire Mapes </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Melita Faucher</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Jeffery Lalor</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">L</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Loren Gatlin</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Tarah Shropshire</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">See all messages</a>
                </div>
            </div>
        </div>

    </div>

</div>