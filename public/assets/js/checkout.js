var stripe = Stripe("pk_test_51Lc2DgD3jHDmrwgZUU0Ikui84Ox4APmpKaf43mzooMJvWaE3wlsUJnxPtLc13zEUXm0YMeJa8GAiDxCw1Re7UvuR00a6xmQuy9");
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
                    var amount = document.getElementById("stripe-amount").value;
                }
            });
        }