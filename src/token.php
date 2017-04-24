<?php
/**
 * Created by PhpStorm.
 * User: pascal
 * Date: 4/24/17
 * Time: 3:54 PM
 */
// include our OAuth2 Server object
require_once __DIR__.'/server.php';

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();