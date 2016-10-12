<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Order History</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Order history -->
<section class="orders">
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="box">
                <div class="box-header">
                    <h3>Order history</h3>

                    <h5>Check your order status, pay for your
                    unpaid orders and more!</h5>
                </div>

                <div class="box-body">
                    <table class="styled-table orders">
                        <thead>
                            <tr>
                                <th class="col_id">Order
                                no.</th>

                                <th class="col_date">Order
                                date</th>

                                <th class="col_count">No. of
                                items</th>

                                <th class="col_total">Order
                                total</th>

                                <th class="col_status">
                                Status</th>

                                <th class=
                                "col_view hide-for-small">
                                &nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td data-title="Order
                                no." class="col_id">#5</td>

                                <td data-title="Order
                                date" class="col_date">
                                03/12/2014</td>

                                <td data-title="No. of
                                items" class="col_count">8
                                <span class=
                                "hide-for-small">item(s)</span></td>

                                <td data-title="Order
                                total" class="col_total">
                                &pound;248.00</td>

                                <td data-title="Status" class="col_status">
                                <span class="label" style=
                                "background-color: #0099cc">New</span></td>

                                <td data-title="View
                                " class=
                                "col_view text-right">
                                    <a class="btn btn-xs"
                                    href="#">View &nbsp;
                                    <i class=
                                    "fa fa-chevron-right"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title="Order
                                no." class="col_id">#4</td>

                                <td data-title="Order
                                date" class="col_date">
                                09/29/2013</td>

                                <td data-title="No. of
                                items" class="col_count">1
                                <span class=
                                "hide-for-small">item(s)</span></td>

                                <td data-title="Order
                                total" class="col_total">
                                &pound;45.20</td>

                                <td data-title="Status" class="col_status">
                                <span class="label" style=
                                "background-color: #9acd32">Paid</span></td>

                                <td data-title="View" class=
                                "col_view text-right">
                                    <a class="btn btn-xs"
                                    href="#">View &nbsp;
                                    <i class=
                                    "fa fa-chevron-right"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title="Order
                                no." class="col_id">#3</td>

                                <td data-title="Order
                                date" class="col_date">
                                07/18/2013</td>

                                <td data-title="No. of
                                items" class="col_count">6
                                <span class=
                                "hide-for-small">item(s)</span></td>

                                <td data-title="Order
                                total" class="col_total">
                                &pound;351.45</td>

                                <td data-title="Status" class="col_status">
                                <span class="label" style=
                                "background-color: #9acd32">Paid</span></td>

                                <td data-title="View" class=
                                "col_view text-right">
                                    <a class="btn btn-xs"
                                    href="#">View &nbsp;
                                    <i class=
                                    "fa fa-chevron-right"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title="Order
                                no." class="col_id">#2</td>

                                <td data-title="Order
                                date" class="col_date">
                                03/12/2013</td>

                                <td data-title="No. of
                                items" class="col_count">1
                                <span class=
                                "hide-for-small">item(s)</span></td>

                                <td data-title="Order
                                total" class="col_total">
                                &pound;19.99</td>

                                <td data-title="Status" class="col_status">
                                <span class="label" style=
                                "background-color: #9acd32">Paid</span></td>

                                <td data-title="View" class=
                                "col_view text-right">
                                    <a class="btn btn-xs"
                                    href="#">View &nbsp;
                                    <i class=
                                    "fa fa-chevron-right"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title="Order
                                no." class="col_id">#1</td>

                                <td data-title="Order
                                date" class="col_date">
                                01/15/2013</td>

                                <td data-title="No. of
                                items" class="col_count">3
                                <span class=
                                "hide-for-small">item(s)</span></td>

                                <td data-title="Order
                                total" class="col_total">
                                &pound;85.20</td>

                                <td data-title="Status" class="col_status">
                                <span class="label" style=
                                "background-color: #9acd32">Paid</span></td>

                                <td data-title="View" class=
                                "col_view text-right">
                                    <a class="btn btn-xs"
                                    href="#">View &nbsp;
                                    <i class=
                                    "fa fa-chevron-right"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="box">
                <div class="box-header">
                    <h3>Order stats</h3>

                    <h5>A few statistics about you</h5>
                </div>

                <div class="box-body">
                    <ul class="price-list">
                        <li>Customer since: <strong>01 January
                        2013</strong></li>

                        <li>Total orders:
                        <strong>5</strong></li>

                        <li>Total items:
                        <strong>19</strong></li>

                        <li class="important">Total spend:
                        <strong>&pound;749.84</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>