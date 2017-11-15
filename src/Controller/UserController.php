<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class UserController extends Controller
{
    /**
     * @Route(
     *     path="/my_profile",
     *     name="my_profile"
     * )
     */

    public function myProfileAction()
    {
        return $this->render('User/my_profile.html.twig');
    }

    /**
     * @Route(
     *     path="/profile/{id}",
     *     name="profile"
     * )
     */
    public function profileAction(User $user)
    {
        if($this->getUser() === $user){
            return $this->redirectToRoute('my_profile');
        }

        return $this->render('User/profile.html.twig', ['user' => $user]);
    }
}
