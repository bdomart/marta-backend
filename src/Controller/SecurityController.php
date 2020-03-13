<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Security\LoginFormAuthenticator;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
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
        $data = [];
        if ($user = $this->getUser()) {
            $data['token'] = $this->createApiToken($user->getId());
            $this->redirectToRoute('app_homepage');
        }

        // get the login error if there is one
        $data['error'] = $authenticationUtils->getLastAuthenticationError();

        return View::create($data, Response::HTTP_BAD_REQUEST);
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
     * @param GuardAuthenticatorHandler $guardHandler
     * @param LoginFormAuthenticator $authenticator
     * @return Response|View
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator)
    {
        $user = new User();
        $data = json_decode($request->getContent(), true);

        $form = $this->createForm(RegistrationType::class, $user);
        $form->submit($data);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email

            $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
            return View::create($this->getUser(), Response::HTTP_OK);
        } else {
            $errors = [];
            foreach ($form->getErrors() as $error) {
                $errors[] = $error;
            }
        }
        return View::Create(['errors' => $errors], Response::HTTP_BAD_REQUEST);
    }

    public function createApiToken($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);

        $token = bin2hex($user->getEmail() . random_bytes(60));

        $user->setApiToken($token);
        $entityManager->persist($user);

        return $token;
    }
}
