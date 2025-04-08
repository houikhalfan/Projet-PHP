<!DOCTYPE html>

<html>

<head>

    <title>Payment system</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    body {
        background-color: #c7dfe7;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
    .pt{
    font-family: 'Great Vibes', sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #e55a75;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 90px;
}
h3, h4 {
        text-align: center;
        font-weight: 700;
        color: #e55a75;
    }

    .credit-card-box {
        background: #ffffff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }

    .panel-heading {
        background-color: #e55a75;
        color: white;
        padding: 20px;
        border-radius: 15px 15px 0 0;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #b388d9;
        border: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #a076d3;
    }

    .form-control {
        border-radius: 8px;
    }

    .alert-success {
        border-radius: 8px;
    }

    .error .alert {
        border-radius: 8px;
    }
</style>


<body>


<div class="container">

    

    <h1 class="pt">Payment System 💳</h1>

    

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default credit-card-box">

                <div class="panel-heading display-table" >

                        <h3 class="panel-title" >Payment Details</h3>
                        <h4>You need to pay ${{$value}}</h4>
                </div>

                <div class="panel-body">

    

                    @if (Session::has('success'))

                        <div class="alert alert-success text-center">

                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                            <p>{{ Session::get('success') }}</p>

                        </div>

                    @endif

    

                    <form 

                            role="form" 

                            action="{{ route('stripe.post',$value) }}" 

                            method="post" 

                            class="require-validation"

                            data-cc-on-file="false"

                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"

                            id="payment-form">

                        @csrf

                        <input type="hidden" name="value" value="{{ $value }}">


                        <div class='form-row row'>

                            <div class='col-xs-12 form-group required'>

                                <label class='control-label'>Name on Card</label> <input

                                    class='form-control' size='4' type='text'>

                            </div>

                        </div>

    

                        <div class='form-row row'>

                            <div class='col-xs-12 form-group card required'>

                                <label class='control-label'>Card Number</label> <input

                                    autocomplete='off' class='form-control card-number' size='20'

                                    type='text'>

                            </div>

                        </div>

    

                        <div class='form-row row'>

                            <div class='col-xs-12 col-md-4 form-group cvc required'>

                                <label class='control-label'>CVC</label> <input autocomplete='off'

                                    class='form-control card-cvc' placeholder='ex. 311' size='4'

                                    type='text'>

                            </div>

                            <div class='col-xs-12 col-md-4 form-group expiration required'>

                                <label class='control-label'>Expiration Month</label> <input

                                    class='form-control card-expiry-month' placeholder='MM' size='2'

                                    type='text'>

                            </div>

                            <div class='col-xs-12 col-md-4 form-group expiration required'>

                                <label class='control-label'>Expiration Year</label> <input

                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'

                                    type='text'>

                            </div>

                        </div>

    

                        <div class='form-row row'>

                            <div class='col-md-12 error form-group hide'>

                                <div class='alert-danger alert'>Please correct the errors and try

                                    again.</div>

                            </div>

                        </div>

    

                        <div class="row">

                            <div class="col-xs-12">

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>

                            </div>

                        </div>

                            

                    </form>

                </div>

            </div>        

        </div>

    </div>

        

</div>



</body>

    

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    

<script type="text/javascript">

  

$(function() {

  

    /*------------------------------------------

    --------------------------------------------

    Stripe Payment Code

    --------------------------------------------

    --------------------------------------------*/

    

    var $form = $(".require-validation");

     

    $('form.require-validation').bind('submit', function(e) {

        var $form = $(".require-validation"),

        inputSelector = ['input[type=email]', 'input[type=password]',

                         'input[type=text]', 'input[type=file]',

                         'textarea'].join(', '),

        $inputs = $form.find('.required').find(inputSelector),

        $errorMessage = $form.find('div.error'),

        valid = true;

        $errorMessage.addClass('hide');

    

        $('.has-error').removeClass('has-error');

        $inputs.each(function(i, el) {

          var $input = $(el);

          if ($input.val() === '') {

            $input.parent().addClass('has-error');

            $errorMessage.removeClass('hide');

            e.preventDefault();

          }

        });

     

        if (!$form.data('cc-on-file')) {

          e.preventDefault();

          Stripe.setPublishableKey($form.data('stripe-publishable-key'));

          Stripe.createToken({

            number: $('.card-number').val(),

            cvc: $('.card-cvc').val(),

            exp_month: $('.card-expiry-month').val(),

            exp_year: $('.card-expiry-year').val()

          }, stripeResponseHandler);

        }

    

    });

      

    /*------------------------------------------

    --------------------------------------------

    Stripe Response Handler

    --------------------------------------------

    --------------------------------------------*/

    function stripeResponseHandler(status, response) {

        if (response.error) {

            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            /* token contains id, last4, and card type */

            var token = response['id'];

                 

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            $form.get(0).submit();

        }

    }

     

});

</script>

</html>