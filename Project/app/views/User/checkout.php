<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
    <?php include 'app\views\includes\userHeader.php'; ?>
        <!--Main layout-->
    <main class="">
        <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Checkout form</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <form  class="card-body" action="" method="post">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                    <!--firstName-->
                    <div class="md-form ">
                        <input type="text" id="firstName" class="form-control">
                        <label for="firstName" class="">First name</label>
                    </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                    <!--lastName-->
                    <div class="md-form">
                        <input type="text" id="lastName" class="form-control">
                        <label for="lastName" class="">Last name</label>
                    </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Username-->
                <div class="md-form input-group pl-0 mb-5">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <!--email-->
                <div class="md-form mb-5">
                    <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                    <label for="email" class="">Email (optional)</label>
                </div>

                <!--address-->
                <div class="md-form mb-5">
                    <input type="text" id="address" name="address" class="form-control" placeholder="1234 Main St">
                    <label for="address" class="">Address</label>
                </div>

                <hr>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>

                <hr>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-dark" type="submit" name="action">Confirm</button>

                </form>

            </div>
            <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->
    </body>
</html>