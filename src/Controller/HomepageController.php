<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    /**
     * @Route(
     *     path="/",
     *     name="homepage"
     * )
     */
    public function homepageAction()
    {
        // FIXME: Récupérer les utilisateurs non admin
        $users = [];
        $users = $this ->getUser();
        var_dump($users);
        return $this->render('Homepage/homepage.html.twig', ['users' => $users]);
    }
}
