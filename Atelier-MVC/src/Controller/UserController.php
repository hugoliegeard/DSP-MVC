<?php

class UserController extends AbstractController
{
    public function register( ){
        return $this->render('user/register.html.twig');
    }

    public function login() {
        return $this->render('user/login.html.twig');
    }
}