<?php

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('default/home.html.twig');
    }

    public function contact(): Response
    {
        return $this->render('default/contact.html.twig');
    }
}
