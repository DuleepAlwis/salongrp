<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        .container { margin-top: 100px; }
        .list-group-item { padding: 5px; border: 0px; }
        .price { font-size: 72px; }
        .currency {
            font-size:25px;
            position: relative;
            top: -30px;
        }
        .card { width: 350px; }
        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>67</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                            WordPress Plugin
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                            <li class="list-group-item">Feature 4</li>
                            <li class="list-group-item">Feature 5</li>
                        </ul>
                        <br><br>
                        <!-- PASTE HERE YOUR FORM CODE FROM PAYPAL -->
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="janitha8080-facilitator@gmail.com">
                            <input type="hidden" name="lc" value="US">
                            <input type="hidden" name="item_name" value="paypalPlugin">
                            <input type="hidden" name="item_number" value="paypalPlugin">
                            <input type="hidden" name="amount" value="67.00">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="cn" value="Add special instructions to the seller:">
                            <input type="hidden" name="no_shipping" value="1">
                            <input type="hidden" name="rm" value="1">
                            <input type="hidden" name="return" value="http://8e78838b.ngrok.io/paypalGateway/thank-you.php">
                            <input type="hidden" name="cancel_return" value="http://8e78838b.ngrok.io/paypalGateway/index.php">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
                            <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
