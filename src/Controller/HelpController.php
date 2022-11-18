<?php

namespace App\Controller;

use Stripe;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelpController extends AbstractController
{

    #[Route('/aide', name: 'app_help')]
    public function index(): Response
    {
        return $this->render('help/index.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
        ]);
    }

    #[Route('/aide/index', name: 'app_help_index', methods: ['POST', 'GET'])]
    public function createCharge(Request $request)
    {
        Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);
        Stripe\Charge::create ([
                "amount" => $request->request->get("stripeAmount") * 100,
                "currency" => "usd",
                "source" => $request->request->get('stripeToken'),
                "description" => "Dog's Adopt Donation"
            ]);
        $this->addFlash(
            'success',
            'Merci pour votre don'
        );
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }
}


