<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

/**
 * Class SecurityController
 * @package App\Controller
 */
class SecurityController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/api/login", name="api_login")
     * @return View
     */
    public function login(): View
    {
        /** @var User $user */
        $user = $this->getUser();

        return View::create([
            'email' => $user->getEmail(),
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'roles' => $user->getRoles(),
        ], Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/register", name="api_register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param GuardAuthenticatorHandler $guardHandler
     * @return Response|View
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler)
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

//            $guardHandler->authenticateUserAndHandleSuccess(
//                $user,
//                $request,
//                $authenticator,
//                'main' // firewall name in security.yaml
//            );
            return View::create([
                'email' => $user->getEmail(),
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'roles' => $user->getRoles(),
            ], Response::HTTP_CREATED);
        }

        $errors = [];
        foreach ($form as $fieldName => $fieldValue) {
            foreach ($fieldValue->getErrors(true) as $error) {
                $errors[$fieldName] = $error->getMessage();
            }
        }

        return View::Create(['errors' => $errors], Response::HTTP_BAD_REQUEST);
    }
}
