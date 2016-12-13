<?php

/**
 * Manage auth system
 * User: marty
 * Date: 13/12/16
 * Time: 08:18
 */
class Auth
{

    private static $isUserLogged;

    public function __construct()
    {
        //Check if session exists
        $isUserLogged = !empty($_SESSION['username']);
    }

    /**
     * Check if user is logged
     * @return bool
     */
    public function isUserLogged() {
        return $this->isUserLogged;
    }

}