<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Merchandise Member</title>
    <link rel="stylesheet" href="CSS/style7.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart Member</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted ">2 Items</div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="img/hoodie.png"></div>
                        <div class="col">
                            <div class="row text-muted">Jacket</div>
                            <div class="row">Hoodie Go Gym</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">
                            <div style="text-decoration: line-through; text-decoration-color: red;">Rp.200.000,00</div>
                            <span></span>
                            <div style="color: green;">Rp.175.000,00</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="img/merchan1.png"></div>
                            <div class="col">
                                <div class="row text-muted">Tumbler Spesial</div>
                                <div class="row">Go Gym </div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">
                                <div style="text-decoration: line-through; text-decoration-color: red;">Rp.175.000,00
                                </div><span></span>
                                <div style="color: green;">Rp.150.000,00</div>


                            </div>
                        </div>
                        <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to Our
                                Merchandise</span></div>
                    </div>
                    <div class="col-md-4 summary" style="background-color: #014638;color: white;">
                        <div>
                            <h5 style="color: white;"><b>Pembayaran</b></h5>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding: left 1px;;">ITEMS 2</div>
                            <div class="col text-right">Rp.325.000,00</div>
                        </div>
                        <form>
                            <label for="jasa-pengiriman">Jasa Pengiriman Barang</label>
                            <select id="jasa-pengiriman">
                                <optgroup label="JNE">
                                    <option value="jne-reguler">JNE Reguler - Rp 10.000,00</option>
                                    <option value="jne-instan">JNE Instan - Rp 20.000,00</option>
                                </optgroup>
                                <optgroup label="Sicepat">
                                    <option value="sicepat-reguler">Sicepat Reguler - Rp 15.000,00</option>
                                    <option value="sicepat-instan">Sicepat Instan - Rp 25.000,00</option>
                                </optgroup>
                            </select>
                            <p style="margin-top: 20px; margin-bottom: 10px;">Metode Pembayaran</p>
                            <select>
                                <optgroup label="Bank Transfer">
                                    <option class="text-muted">BCA</option>
                                    <option class="text-muted">BNI</option>
                                    <option class="text-muted">BRI</option>
                                </optgroup>
                                <optgroup label="Kartu Kredit">
                                    <option class="text-muted">Visa</option>
                                    <option class="text-muted">MasterCard</option>
                                    <option class="text-muted">American Express</option>
                                </optgroup>
                                <optgroup label="E-Wallet">
                                    <option class="text-muted">GoPay</option>
                                    <option class="text-muted">OVO</option>
                                    <option class="text-muted">Dana</option>
                                </optgroup>
                            </select>
                        </form>
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">TOTAL PRICE</div>
                            <div class="col text-right">Rp.340.000,00</div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="checkout.html"
                                    style="background-color: #F1FF46;">CHECKOUT !</a></div>
                        </div>
                    </div>

                </div>
</body>

</html>