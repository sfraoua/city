<?php

namespace AppBundle\Handler;

use Symfony\Component\Routing\RouterInterface,
    Symfony\Component\HttpFoundation\RedirectResponse,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface,
    Symfony\Component\Security\Core\Exception\AuthenticationException;

class ErrorHandler implements AuthenticationFailureHandlerInterface {

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        $result = array(
            'success' => false,
            'function' => 'onAuthenticationFailure',
            'error' => true,
            'message' => 'error bad credantials'
        );
        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
