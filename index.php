<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple shop</title>

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .item {
                padding: 20px;
                transition: all .4s;
                -webkit-transition: all .4s;
            }
            .item:hover {
                transform: scale(1.05);
                -ms-transform: scale(1.05);
                -webkit-transform: scale(1.05);
                box-shadow: 0 0 20px #888;
                background-color: #fff;
            }
            .simpleCart_items img{
                max-height: 64px;
                max-width: 64px;
            }
            .item-quantity, .item-increment, .item-decrement {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">simpleShop</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="koszyk" data-toggle="modal" data-target="#myModal">Koszyk
                                            (<span class="simpleCart_quantity"></span>)
                                        </a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>   
        <!--okienko koszyk-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Koszyk <span class="showIfEmpty">jest pusty</span></h4>
                    </div>
                    <div class="hideIfEmpty">
                        <div class="modal-body">
                            <div class="simpleCart_items"></div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Łącznie</th>
                                        <th>Koszty przesyłki</th>
                                        <th>Do zapłaty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="simpleCart_total"></div></td>
                                        <td><div class="simpleCart_shipping"></div></td>
                                        <td><div class="simpleCart_grandTotal"></div></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="simpleCart_empty btn btn-default">Opróżnij koszyk</a>                 
                            <a href="javascript:;" class="simpleCart_checkout btn btn-primary">Złóż zamówienie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> Apple iPhone </h4>
                                <img class="item_thumb" src="img/Apple_iPhone.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> Eten G500 </h4>
                                <img class="item_thumb" src="img/Eten_G500.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> HP Ipaq 111 </h4>
                                <img class="item_thumb" src="img/HP_Ipaq_111.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> HP Ipaq 211 </h4>
                                <img class="item_thumb" src="img/HP_Ipaq_211.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> HP iPaq hx2495 </h4>
                                <img class="item_thumb" src="img/HP_iPaq_hx2495.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item text-center">
                    <div class="simpleCart_shelfItem">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_name"> HTC Apache </h4>
                                <img class="item_thumb" src="img/HTC_Apache.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="item_price">35.99 zł </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" value="1" class="item_Quantity form-control" placeholder="ilość">
                            </div>
                            <div class="col-xs-5">
                                <input type="button" class="item_add btn btn-primary" value="Dodaj">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/simpleCart.js"></script>
        <script>
            simpleCart({
                // array representing the format and columns of the cart,
                // see the cart columns documentation
                cartColumns: [
                    {attr: "name", label: "Produkt"},
                    {view: 'image', attr: 'thumb', label: false},
                    {view: "currency", attr: "price", label: "Cena"},
                    {view: "decrement", label: false, text: '<span class="glyphicon glyphicon-minus"></span>'},
                    {attr: "quantity", label: "Ilość"},
                    {view: "increment", label: false, text: '<span class="glyphicon glyphicon-minus"></span>'},
                    {view: "currency", attr: "total", label: "Razem"},
                    {view: "remove", label: false, text: '<span class="glyphicon glyphicon-remove"></span>'}
                ],
                // "div" or "table" - builds the cart as a 
                // table or collection of divs
                cartStyle: "table",
                // how simpleCart should checkout, see the 
                // checkout reference for more info 
                checkout: {
                    type: "PayPal",
                    email: "poczta@adrianbienias.pl"
                },
                // set the currency, see the currency 
                // reference for more info
                currency: "PLN",
                // collection of arbitrary data you may want to store 
                // with the cart, such as customer info
                data: {},
                // set the cart langauge 
                // (may be used for checkout)
                language: "english-us",
                // array of item fields that will not be 
                // sent to checkout
                excludeFromCheckout: [],
                // custom function to add shipping cost
                shippingCustom: null,
                // flat rate shipping option
                shippingFlatRate: 10,
                // added shipping based on this value 
                // multiplied by the cart quantity
                shippingQuantityRate: 0,
                // added shipping based on this value 
                // multiplied by the cart subtotal
                shippingTotalRate: 0,
                // tax rate applied to cart subtotal
                taxRate: 0,
                // true if tax should be applied to shipping
                taxShipping: false,
                // event callbacks 
                beforeAdd: null,
                afterAdd: null,
                load: null,
                beforeSave: null,
                afterSave: null,
                update: null,
                ready: null,
                checkoutSuccess: null,
                checkoutFail: null,
                beforeCheckout: null,
                beforeRemove: null
            });
            simpleCart.bind("afterAdd", function () {
                $(".koszyk").fadeOut(500).fadeIn(500);
            });
            simpleCart.bind('update', function () {
                if (simpleCart.quantity() == 0) {
                    $(".hideIfEmpty").hide();
                    $(".showIfEmpty").show();
                } else {
                    $(".hideIfEmpty").show();
                    $(".showIfEmpty").hide();
                }
            });
        </script>
    </body>
</html>
