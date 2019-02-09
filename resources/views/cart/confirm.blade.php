@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div>
        <h2> Order confirm and payment</h2>
        <h4> Your Total: {{$total}}₴ </h4>
    </div>
    <div class="panel panel-default bootstrap-basic">
        <form class="panel-body" action="your-form-handling-page" method="POST" id="checkout-form"
              onsubmit="return do_when_clicking_submit_button()">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="cardholder-name">Name on Card</label>
                    <input type="text" class="form-control" id="cardholder-name" placeholder="Full Name">
                    <span class="helper-text"></span>
                </div>
                <!--Hosted Field for CC number-->
                <div class="form-group col-md-12">
                    <label for="card-number">Card Number</label>
                    <div class="input-group">
                        <div class="form-control" id="card-number" data-bluesnap="ccn"></div>
                        <div id="card-logo" class="input-group-addon"><img
                                    src="https://files.readme.io/d1a25b4-generic-card.png" height="20px"></div>
                    </div>
                    <span class="helper-text" id="card-help"></span>
                </div>
                <!--Hosted Field for CC EXP-->
                <div class="form-group col-xs-7">
                    <label for="exp-date">Exp. Date</label>
                    <div class="form-control" id="exp-date" data-bluesnap="exp"></div>
                    <span class="helper-text"></span>
                </div>
                <!--Hosted Field for CC CVV-->
                <div class="form-group col-xs-5">
                    <label for="cvv">Security Code</label>
                    <div class="form-control" id="cvv" data-bluesnap="cvv"></div>
                    <span class="helper-text"></span>
                </div>
            </div>

            <button class="btn btn-success btn-lg col-xs-6 col-xs-offset-3" type="submit" id="submit-button">Pay Now
            </button>

        </form>

    </div>

    <!--BlueSnap Hosted Payment Fields JavaScript file-->
    <script type="text/javascript"
            src="https://sandbox.bluesnap.com/services/hosted-payment-fields/v1.0/bluesnap.hpf.mini.js"></script>
@endsection