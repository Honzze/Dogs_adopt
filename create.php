<?php

$stripe = new \Stripe\StripeClient('pk_test_51Lc2DgD3jHDmrwgZUU0Ikui84Ox4APmpKaf43mzooMJvWaE3wlsUJnxPtLc13zEUXm0YMeJa8GAiDxCw1Re7UvuR00a6xmQuy9');

$stripe->paymentIntents->create(
  [
    'amount' => 1,
    'currency' => 'eur',
    'automatic_payment_methods' => ['enabled' => true],
  ]
);