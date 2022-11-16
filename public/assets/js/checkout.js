var stripe = Stripe("pk_live_51Lc2DgD3jHDmrwgZIsU9vfHk4XF8kmrRHXmXHsY2uMTxsZ1Ks2dXWl82iy6lF9HBTwlPgI89e1litAukV1W5tOxn00yVMlM9iJ");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                if(typeof result.error != 'undefined') {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                  console.log(document.getElementById("stripe-token-id").value);
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }