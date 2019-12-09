<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 * @package App\Controller
 */
class SecurityController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return View
     */
    public function login(AuthenticationUtils $authenticationUtils): View
    {
        // if ($this->getUser()) {
        //    $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return View::create($this->getUser(), Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }

    /**
     * @Rest\Post("/register", name="app_register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param EntityManagerInterface $em
     * @return View
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $em): View
    {
        $user = new User();

        if (empty($request->request->get("email"))
            || empty($request->request->get("password"))) {
            return View::create(['error' => 'Email or password cannot be empty'], Response::HTTP_BAD_REQUEST);
        }
        if ($em->getRepository(User::class)->findOneBy(["email" => $request->request->get("email")])) {
            return View::create(['error' => 'Email already exist'], Response::HTTP_BAD_REQUEST);
        }

        $user->setEmail($request->request->get("email"));
        $password = $passwordEncoder->encodePassword($user, $request->request->get("password"));
        $user->setPassword($password);

        $em->persist($user);
        $em->flush();

        return View::create($user, Response::HTTP_CREATED);
    }
}
