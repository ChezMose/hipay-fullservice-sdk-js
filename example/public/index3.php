<?php

require_once('credentials.php');

?><!DOCTYPE html>
<!-- saved from url=(0045)http://teptek.me/hipay/script/clean/2-select/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>HiPay Fullservice Tokenization</title>
<!--    <link href="./assets/basic.css" media="screen" rel="stylesheet" type="text/css">-->
<!--    <link href="./assets/basic-client.css" media="screen" rel="stylesheet" type="text/css">-->
    <!--    <link href="./assets/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">-->
    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" src="../node_modules/bootstrap/dist/css/bootstrap.css">

    <!-- Optional theme -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
    <link rel="stylesheet" src="../node_modules/bootstrap/dist/css/bootstrap-theme.css">



    <link href="../assets/payment-methods.css" media="screen" rel="stylesheet" type="text/css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>





    <script type="text/javascript" src="../../dist/hipay-fullservice-sdk.js"></script>


<!--    <style>-->
<!--        .container-->
<!--        {-->
<!--            display:table;-->
<!--            width: 100%;-->
<!--        }-->
<!---->
<!--        .row-->
<!--        {-->
<!--            height: 100%;-->
<!--            display: table-row;-->
<!--        }-->
<!---->
<!--        .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7-->
<!--        {-->
<!--            display: table-cell;-->
<!--        }-->
<!---->
<!---->
<!---->
<!---->
<!--        *{-->
<!--            padding: 0;-->
<!--            margin: 0;-->
<!--            box-sizing: border-box;-->
<!--        }-->
<!---->
<!--        ul{-->
<!--            display: table;-->
<!--            width: 100%;-->
<!--            padding: 10px-->
<!--        }-->
<!---->
<!--        ul li{-->
<!--            list-style: none;-->
<!--            float: left;-->
<!--            background: #ddd;-->
<!--            margin-right: 10px;-->
<!--            padding: 10px-->
<!--        }-->
<!---->
<!---->
<!--        ul li img {-->
<!--            width: 25px;-->
<!--            height: 25px;-->
<!--            background: red;-->
<!--        }-->
<!---->
<!--        ul li span, ul li p{-->
<!--            line-height: 25px;-->
<!--            height: 25px;-->
<!--            background: blue;-->
<!--            color: #fff-->
<!--        }-->
<!---->
<!---->
<!--        /* here the style */-->
<!--        .vertical-align li {-->
<!--            text-align: center;-->
<!--        }-->
<!---->
<!--        .horizontal-align li img,-->
<!--        .horizontal-align li span {-->
<!--            float: left;-->
<!--        }-->
<!---->
<!---->
<!--    </style>-->
</head>

<body>


<div class="container">

    <div class="row">
        <div class="col-md-7">

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>


            <div id="infos">
                <div id="infos-txt">
                    <div id="price">HiPay Direct Post Tokenization Simulator</div>
                    <div id="order">Submit the form in oder to tokenize the credit card details using the HiPay Fullservice SDK for JavaScript (payment details won't hit the server). You will see the HiPay Fullservice platform response below.</div>
                    <div id="code"></div>
                    <div id="link-area"><a href="#null" id="link">Click here</a> to fill the form with sample payment details.</div>
                    <div id="charge"><button type="button" id="charge-button" style="display: none;">Create a test charge on this token (server-side PHP SDK)</button></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="details">
                Enter your payment details:
            </div>

            <div>
                <div class="input-group" id="card-number">
                    <span class="input-group-addon"></span>
                    <input id="input-card" type="number" placeholder="Card number" maxlength="16" value="">
                </div>
                <div class="input-group" id="name">
                    <span class="input-group-addon"></span>
                    <input id="input-name" type="text" placeholder="Cardholder">
                </div>

            </div>

            <div>
                <div class="input-group" id="date">
                    <span class="input-group-addon"></span>
                    <input id="input-month" type="number" placeholder="Month" maxlength="2">
                    <input id="input-year" type="number" placeholder="Year" maxlength="4">
                </div>
                <div>
                    <div class="input-group col-md-6" id="cvv">
                        <span class="input-group-addon"></span>
                        <input id="input-cvv" type="number" placeholder="CVV" maxlength="3">
                    </div>
                    <div id="cvv-button" class="col-md-6">
                        <button type="button" data-toggle="modal" data-target="#cvv-modal">?</button>
                    </div>
                </div>

            </div>

            <div id="submit-zone">
                <div id="error"></div>
                <button type="button" data-toggle="modal" data-target="#other-method-modal" id="pay-button">Tokenize</button>
            </div>

        </div>
    </div><!-- /.row -->
</div>
<div class="container">

    <div class="row">
                <div style=" width:25%;" class="col-md-3 fcontent"><div id="certif-digicert"></div></div>
                <div style=" width:25%;" class="col-md-3 fcontent"><div id="certif-pci"></div></div>
                <div style=" width:25%;" class="col-md-3 fcontent"><div id="certif-mastercard"></div></div>
                <div style=" width:25%;" class="col-md-3 fcontent"><div id="certif-visa"></div></div>
            </div>




        <!--    <div class="row">-->
    <!--        <div class="col-md-7" style="border:1px solid black; width:30%">-->
    <!--            <div id="infos">-->
    <!--                <div id="infos-txt">-->
    <!--                    <div id="price">HiPay Direct Post Tokenization Simulator</div>-->
    <!--                    <div id="order">Submit the form in oder to tokenize the credit card details using the HiPay Fullservice SDK for JavaScript (payment details won't hit the server). You will see the HiPay Fullservice platform response below.</div>-->
    <!--                    <div id="code"></div>-->
    <!--                    <div id="link-area"><a href="#null" id="link">Click here</a> to fill the form with sample payment details.</div>-->
    <!--                    <div id="charge"><button type="button" id="charge-button" style="display: none;">Create a test charge on this token (server-side PHP SDK)</button></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        <div id="form" class="col-md-5">-->
    <!---->
    <!--            <div class="details">-->
    <!--                Enter your payment details:-->
    <!--            </div>-->
    <!---->
    <!--            <div>-->
    <!--                <div class="input-group" id="card-number">-->
    <!--                    <span class="input-group-addon"></span>-->
    <!--                    <input id="input-card" type="number" placeholder="Card number" maxlength="16" value="">-->
    <!--                </div>-->
    <!--                <div class="input-group" id="name">-->
    <!--                    <span class="input-group-addon"></span>-->
    <!--                    <input id="input-name" type="text" placeholder="Cardholder">-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!---->
    <!--            <div>-->
    <!--                <div class="input-group" id="date">-->
    <!--                    <span class="input-group-addon"></span>-->
    <!--                    <input id="input-month" type="number" placeholder="Month" maxlength="2">-->
    <!--                    <input id="input-year" type="number" placeholder="Year" maxlength="4">-->
    <!--                </div>-->
    <!--                <div>-->
    <!--                    <div class="input-group col-md-6" id="cvv">-->
    <!--                        <span class="input-group-addon"></span>-->
    <!--                        <input id="input-cvv" type="number" placeholder="CVV" maxlength="3">-->
    <!--                    </div>-->
    <!--                    <div id="cvv-button" class="col-md-6">-->
    <!--                        <button type="button" data-toggle="modal" data-target="#cvv-modal">?</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!---->
    <!--            <div id="submit-zone">-->
    <!--                <div id="error"></div>-->
    <!--                <button type="button" data-toggle="modal" data-target="#other-method-modal" id="pay-button">Tokenize</button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <footer class="container">-->
    <!--        <div class="fcontent"><div id="certif-digicert"></div></div>-->
    <!--        <div class="fcontent"><div id="certif-pci"></div></div>-->
    <!--        <div class="fcontent"><div id="certif-mastercard"></div></div>-->
    <!--        <div class="fcontent"><div id="certif-visa"></div></div>-->
    <!--    </footer>-->
    <!---->
    <!--    <div id="brand" class="container">-->
    <!--        <a href="http://www.hipayfullservice.com/" target="_blank" id="fs-logo"></a>-->
    <!--    </div>-->

</div>

<div class="modal fade" id="cvv-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div id="modal-header-title">
                    <h4 class="modal-title" id="myModalLabel">Card verification code</h4>
                </div>
                <div id="modal-header-close">
                    <button type="button" id="btn-close" data-dismiss="modal"></button>
                </div>
            </div>
            <div class="modal-body">
                <p>For security reasons, you have to enter your card security code (CVC).
                    It's the 3-digits number on the back of your card for <span class="modal-bold">VISA®</span>, <span class="modal-bold">MASTERCARD®</span> and <span class="modal-bold">MAESTRO®</span></p>
                <p>The <span class="modal-bold">AMERICAN EXPRESS</span> security code is the 4-digits number on the front of your card.</p>
                <div id="cvv-img">
                    <img src="../assets/card.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!--    <script type="text/javascript" src="./assets/modal.js"></script>-->
<!--    <script type="text/javascript" src="./assets/links.js"></script>-->
<!--    <script type="text/javascript" src="./assets/input.js"></script>-->

<script type="text/javascript">
    $(document).ready(function(){

    });
    //      $(document).ready(function(){
    function setParamsValueTest() {
        document.getElementById("input-card").value= '4111111111111111';
        document.getElementById("input-name").value= 'John Doe';
        document.getElementById("input-cvv").value= '123';
        document.getElementById("input-month").value= '12';
        document.getElementById("input-year").value= '<?= date('Y') + 2 ?>';
    }

    function tokenize() {
        var params = {
            card_number:  document.getElementById("input-card").value,
            card_holder:document.getElementById("input-name").value,
            cvc:document.getElementById("input-cvv").value,
            card_expiry_month:document.getElementById("input-month").value,
            card_expiry_year:document.getElementById("input-year").value ,
            multi_use: '0'
        };


        HiPay.setTarget('stage'); // default is production/live
        HiPay.setCredentials('<?php echo $credentials['public']['username']; ?>', '<?php echo $credentials['public']['password']; ?>');

        HiPay.create(params,
            function(result) {

                token = result.token;

//                  $("#pay-button").text("Tokenize");
//                  $("#order").text("The token has been created using the JavaScript SDK (client side).");
                document.getElementById("pay-button").innerHTML = "Tokenize";

                document.getElementById("order").innerHTML = "The token has been created using the JavaScript SDK (client side).";
                document.getElementById("code").innerHTML = JSON.stringify(result, null, 4);
//                  $('#code').text(JSON.stringify(result, null, 4));
//                  $('#link-area').text('');
                document.getElementById("link-area").style.display = 'none';
                document.getElementById("charge-button").style.display = 'block';
//                  $("#charge-button").show();

            }, function (errors) {
//                  $("#pay-button").text("Tokenize");
//                  $("#form :input").prop("disabled", false);
//                  $("#form :button").prop("disabled", false);

                if (typeof errors.message != "undefined") {
//                    $("#error").text("Error: " + errors.message);
                } else {
//                    $("#error").text("An error occurred with the request.");
                }
            }
        );
    }
    var token = null;

    var linkButton = document.getElementById("link");

    if ( linkButton.addEventListener) {
        linkButton.addEventListener('click', setParamsValueTest, false);
    } else {
        linkButton.attachEvent("onclick", setParamsValueTest);
    }

    //    linkButton.addEventListener('click', function() {
    //        document.getElementById("input-card").value= '4111111111111111';
    //        document.getElementById("input-name").value= 'John Doe';
    //        document.getElementById("input-cvv").value= '123';
    //        document.getElementById("input-month").value= '12';
    //        document.getElementById("input-year").value= '<?//= date('Y') + 2 ?>//';
    //
    //    });

    var element = document.getElementById("pay-button");

    if ( element.addEventListener) {
        element.addEventListener('click', tokenize, false);
    } else {
        element.attachEvent("onclick", tokenize);
    }



    //    element.addEventListener('click', function() {
    //
    ////          $("#charge-button").click(function() {
    ////        var chargeButton = document.getElementById("charge-button");
    ////            chargeButton.value = "Loading…";
    ////        chargeButton.disabled = true;
    ////            $("#charge-button").text("Loading…");
    ////            $("#charge-button").prop("disabled", true);
    ////
    ////            $.ajax({
    ////               url : 'order.php?token='+token,
    ////               type : 'GET',
    ////               dataType : 'html',
    ////               success : function(html, status){
    ////                   $('#order').html(html);
    ////                   $('#code').html('');
    ////                   $("#charge-button").hide();
    ////               },
    ////
    ////               error : function(result, status, error){
    ////                   $('#order').html(result.responseText);
    ////                   $('#code').html('');
    ////                   $("#charge-button").text("Try again to create a charge…");
    ////                   $("#charge-button").prop("disabled", false);
    ////               },
    ////              });
    ////
    ////          });
    //
    ////          $("#pay-button").click(function() {
    ////
    ////            $("#form :input").prop("disabled", true);
    ////            $("#form :button").prop("disabled", true);
    ////            $("#error").text("");
    ////
    ////            $("#pay-button").text("Loading…");
    //
    //        var params = {
    //            card_number:  document.getElementById("input-card").value,
    //            card_holder:document.getElementById("input-name").value,
    //            cvc:document.getElementById("input-cvv").value,
    //            card_expiry_month:document.getElementById("input-month").value,
    //            card_expiry_year:document.getElementById("input-year").value ,
    //            multi_use: '0'
    //        };
    //
    //
    //        HiPay.setTarget('stage'); // default is production/live
    //        HiPay.setCredentials('<?php //echo $credentials['public']['username']; ?>//', '<?php //echo $credentials['public']['password']; ?>//');
    //
    //        HiPay.create(params,
    //            function(result) {
    //
    //                token = result.token;
    //
    ////                  $("#pay-button").text("Tokenize");
    ////                  $("#order").text("The token has been created using the JavaScript SDK (client side).");
    //                document.getElementById("pay-button").innerHTML = "Tokenize";
    //
    //                document.getElementById("order").innerHTML = "The token has been created using the JavaScript SDK (client side).";
    //                document.getElementById("code").innerHTML = JSON.stringify(result, null, 4);
    ////                  $('#code').text(JSON.stringify(result, null, 4));
    ////                  $('#link-area').text('');
    //                document.getElementById("link-area").style.display = 'none';
    //document.getElementById("charge-button").style.display = 'block';
    ////                  $("#charge-button").show();
    //
    //            }, function (errors) {
    ////                  $("#pay-button").text("Tokenize");
    ////                  $("#form :input").prop("disabled", false);
    ////                  $("#form :button").prop("disabled", false);
    //
    //                if (typeof errors.message != "undefined") {
    ////                    $("#error").text("Error: " + errors.message);
    //                } else {
    ////                    $("#error").text("An error occurred with the request.");
    //                }
    //            }
    //        );
    //
    //    }, false);

    //              return false;
    //          });

    //      });

</script>



</body></html>