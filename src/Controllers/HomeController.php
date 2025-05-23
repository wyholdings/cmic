<?php

namespace App\Controllers;

use Twig\Environment;

class HomeController
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): void
    {
        echo $this->twig->render('index.html.twig');
    }

    public function about(): void
    {
        echo $this->twig->render('about.html.twig');
    }

    public function program(): void
    {
        echo $this->twig->render('program.html.twig');
    }

    public function registration(): void
    {
        echo $this->twig->render('registration.html.twig');
    }

    public function confirmation(): void
    {
        echo $this->twig->render('confirmation.html.twig');
    }

    public function notice(): void
    {
        echo $this->twig->render('notice.html.twig');
    }
}

?>