<?php

class AdminController extends AbstractController
{
    public function dashboard()
    {
        return $this->render('admin/dashboard.html.twig');
    }

}