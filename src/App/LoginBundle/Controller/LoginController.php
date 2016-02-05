<?php

namespace App\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * User controller.
 */
class LoginController extends Controller
{

	/**
	 *
	 * @Route("/login", name="login")
	 * @Template("LoginBundle:Login:login.html.twig")
	 */
	public function loginAction(Request $request)
	{
		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		return array(
			'last_username' => $lastUsername,
			'error'         => $error
		);
	}

	/**
	 * @Route("/login_check", name="login_check")
	 */
	public function loginCheckAction(){ }

	/**
	 * @Route("/logout", name="logout")
	 */
	public function logoutAction(){ }

}
