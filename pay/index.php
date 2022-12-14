<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pay with Interswitch</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <script src="interswitch.js"></script>
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <h2>@ISCE</h2>
        <p class="lead">Simple Interswitch Payment Gateway</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Binatone Professional Hair Clipper HC-650 Pro</h6>
                        <small class="text-muted">Power and Heavyweight AC hair clipper with complete hair dressing tools for both professional salon and home use</small>
                    </div>
                    <span class="text-muted">₦9990</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Defacto Man OVERSIZE FIT Knitted T-Shirt-Orange</h6>
                        <small class="text-muted">Gender:Man,Buyer Group:Knitted,Colour Family:Orange</small>
                    </div>
                    <span class="text-muted">₦2300</span>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Naira)</span>
                    <strong>₦12290</strong>
                </li>
            </ul>

        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing Information</h4>

          <!-- Form containing POST parameters -->


                <!-- Hidden parameters containing interswitch merchant credentials -->
                <input type="hidden"  name='amount' value="1229000"/>
                <input type="hidden"  name='currency' value="566"/>
                <input type="hidden" name='txn_ref' id="tranRef"/>
                <input type="hidden"  name='merchant_code'/>
                <input type="hidden"  name='pay_item_id'/>
                <input type="hidden"  name='site_redirect_url'/>
                <input type="hidden"  name='display_mode' value='PAGE'/>
                <!-- Hidden parameters end -->

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input name="" type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input name="" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input name="cust_id" type="email" value="test@mail.com" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>


                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>
                <hr class="mb-4">
                <button style="border: 1px solid rgb(206, 206, 206);
				height: 40px;
				margin: 0;
				box-shadow: rgb(226, 224, 224) 0px 1px 3px;
				padding: 0 2em 0 0.8em;
				font-weight: 700;
				border-radius: 4px;
				color: rgb(0, 66, 95);
				font-size: 13px;
				text-transform: uppercase;
				background-color: #FFF;
				background-image: url(https://paymentgateway.interswitchgroup.com/paymentgateway/public/images/isw_paynow_btnbg.png);
				width: 260px;
				display: inline-block;
				box-sizing: border-box;
				cursor: pointer;
				font-family: 'proxima-nova', sans-serif, 'Helvetica';" onclick="checkout()">
                    <img style="float:left;" class="isw-pay-logo"
                         src="https://paymentgateway.interswitchgroup.com/paymentgateway/public/images/isw_paynow_btn.png"/>
                    <span style="margin-top: 10px;display: inline-block;margin-left: 8px;">
						Pay with Interswitch
					</span>
                </button>

                <button style="border: 1px solid rgb(206, 206, 206);
				height: 40px;
				margin: 0;
				box-shadow: rgb(226, 224, 224) 0px 1px 3px;
				padding: 0 2em 0 0.8em;
				font-weight: 700;
				border-radius: 4px;
				color: rgb(0, 66, 95);
				font-size: 13px;
				text-transform: uppercase;
				background-color: #FFF;
				background-image: url(https://paymentgateway.interswitchgroup.com/paymentgateway/public/images/isw_paynow_btnbg.png);
				width: 260px;
				display: inline-block;
				box-sizing: border-box;
				cursor: pointer;
				font-family: 'proxima-nova', sans-serif, 'Helvetica';" disabled>
                    <img style="float:left; height: 35px; width: 50px;" class="isw-pay-logo"
                         src="https://w7.pngwing.com/pngs/962/794/png-transparent-mastercard-credit-card-mastercard-logo-mastercard-logo-love-text-heart.png" />
                    <span style="margin-top: 10px;display: inline-block;margin-left: 8px;">
						Pay with Mastercard
					</span>
                </button>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 ISCE APP</p>

    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://qa.interswitchng.com/collections/public/javascripts/inline-checkout.js"></script>
</body>
</html>