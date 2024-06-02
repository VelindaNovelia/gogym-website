<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="CSS/style3.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" id="border">
    <div class="container text-muted text-secondary bg-light" >
        <!-- <div class="col-md-6 col-lg-4"> -->
            <div class="product-checkout-details mt-5 mt-lg-0">
                <div class="group" > <a href="home.html"><input class="btn btn-warning p-1 rounded-pill py-2 p-3 pt-2 m-2 mt-2" type="button" value="Back to Site" style="float:inline-end;"></a></div>
                </div>
                  <h4 class="mb-3 border-bottom pb-4 m-2 pt-3">Order Summary</h4>
                  <div class="media product-card">
                      <p>1 Month GYM Access</p>
                     <div class="media-body text-right">
                        <p class="h5">1 x 250.000</p>
                     </div>
                     
                     <Div class="h5">Do You want a Personal Trainer?</Div>
                     <div class="d-flex justify-content-center lead p-1 m-2 ">
                     <input type="radio" id="yes" name="pt" style="width: 30px;">
                     <label for="yes" class="">Yes &nbsp;</label>
                     <input type="radio" id="no" name="pt" style="width: 30px;">
                     <label for="no">No</label>
                     </div>
                     <div>
                        <form action="">
                            <label for="pt1">Chose your Personal Trainer</label>
                            <select name="pt1" id="pt1"></select>

                        </form>
                     </div>
                  </div>
                  <div class=""></div>
                  <ul class="summary-prices list-unstyled mb-4">
                     <li class="d-flex justify-content-between">
                        <span >Subtotal:</span>
                        <span class="h5">Rp.250.000</span>
                     </li>
                     <li class="d-flex justify-content-between">
                        <span>Total</span>
                        <span class="h5">Rp.250.000</span>
                     </li>
                  </ul>
                  <form action="#">
                     <div class="form-check mb-3">
                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                       <label class="form-check-label" for="exampleRadios1">
                         Direct bank transfer 
                       </label>

                       <div class="alert alert-secondary mt-3" role="alert">
                          Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                        </div>
                     </div>

                     <div class="form-check mb-3">
                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                       <label class="form-check-label" for="exampleRadios2">
                          Check payments 
                       </label>
                     </div>

                      <div class="form-check mb-3">
                         <input type="checkbox" class="form-check-input" id="exampleCheck3">
                         <label class="form-check-label" for="exampleCheck3">I have read and agree to the website terms and conditions *</label>
                       </div>
                  </form>

                  <div class="info mt-4 border-top pt-4 mb-5">
                     Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.
                  </div>
                  <a href="#" class="btn btn-success btn-small d-flex justify-content-center mb-5 ">Place Order</a>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
</body>
</html>