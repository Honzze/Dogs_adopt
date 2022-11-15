<?php
    $intent = $payment_intent;
    echo json_encode(array('client_secret' => $intent->client_secret));
?>