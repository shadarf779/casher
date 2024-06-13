<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <h1>laravel 11 how to integrate Stripe paymnet Gateway</h1>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>laravel 11 how to integrate Stripe paymnet Gateway</h4>
                    </div>

                        <div class="card-body">
                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:22%" class="text-center">Subtotal</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-th="product">
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                                                <div class="col-sm-9">
                                                    <h4 class="nomargin">Product 1</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="price">6$</td>
                                        <td data-th="Quantity">
                                            <input type="number" value="1" class="form-control quantity cart_update text-center" min="1" />
                                        </td>
                                        <td data-th="subtotal" class="text-center" > 6$</td>
                                        <td class="action" data-th="">
                                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o">Delete</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align:right;"><h3><strong>Total $6</strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:right;">
                                            <form action="/session" method="POST">
                                                <a href="{{url('/')}}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i>continue Shopping</a>
                                                <input name="_token"  type="hidden" value="{{csrf_token()}}">
                                                <input type="hidden" name="total" value="6">
                                                <input type="hidden" name="prodectname" value="asus vivobook 17 laptop ">
                                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>checkout</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
            </div>
</body>
</html>
