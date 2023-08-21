<style>
    .nice-select {
        width: 100%;
    }
</style>
<h4 class="mb-3">Billing address</h4>
<form class="needs-validation" novalidate="" action="/cart/checkout/create-bill" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required="">
            @error('firstName') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="">
            @error('lastName') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="email">Email <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
        @error('Email') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
    </div>

    <div class="mb-3">
        <label for="address">Address</label>
        <div class="row">
            <div class="col-4">
                <select name="tinh_tp">
                    <option selected>tỉnh thành phố</option style="width:100%;">
                    <option value="long an">long an</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Hà Nội">Hà Nội</option>
                </select>
                @error('tinh_tp') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
            </div>
            <div class="col-8">
                <input type="text" class="form-control " id="address" name="address" placeholder="1234 Main St" required="">
                @error('address') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
            </div>
        </div>


    </div>
    <div class="mb-3">
        <label for="address">so dien thoai</label>
        <input type="number" class="form-control" id="address" name="phoneNumber" required="">
        @error('phoneNumber') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
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