<h4 class="mb-3">Billing address</h4>
<form class="needs-validation" novalidate="" action="/cart/checkout/create-bill" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="email">Email <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
        <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
        </div>
    </div>

    <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
        <div class="invalid-feedback">
            Please enter your shipping address.
        </div>
    </div>
    <div class="mb-3">
        <label for="address">so dien thoai</label>
        <input type="number" class="form-control" id="address" name="phoneNumber" required="">
        <div class="invalid-feedback">
            Please enter your shipping address.
        </div>
    </div>
    <!-- <hr class="mb-4"> -->
    <!-- <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="same-address">
        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
    </div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info">Save this information for next time</label>
    </div> -->
    <!-- <hr class="mb-4">

    <h4 class="mb-3">Payment</h4>

    <div class="d-block my-3">
        <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Paypal</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
                Name on card is required
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
                Credit card number is required
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
                Expiration date required
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="cc-expiration">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
                Security code required
            </div>
        </div>
    </div> -->
    <!-- <hr class="mb-4"> -->
    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
</form>