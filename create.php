<?php

$stripe = new \Stripe\StripeClient('sk_test_51Lc2DgD3jHDmrwgZDO64xfhnZGyfLGs1tStxl20am6ZDD026JTno9nl5VpT5K1sXcfEiIEDKPEPwPogSt4vmHiyx00qDtBpWAU');

$stripe->paymentIntents->create(
  [
    'amount' => 1099,
    'currency' => 'eur',
    'automatic_payment_methods' => ['enabled' => true],
  ]
);