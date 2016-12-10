<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 24-10-2016
 * Time: 23:18
 */

namespace AppBundle\Aplication;

use SessionHandlerInterface;

class ControleSession extends SessionHandlerInterfac
{
    protected $key,
                $name,
                $cookie;


    public function __construct($key, $name = 'MY_SESSION', $cookie = [])
    {
        $this->key = $key;
        $this->name = $name;
        $this->cookie = $cookie;

        $this->cookie += [
            'lifetime' => 0,
            'path'     => ini_get('session.cookie_path'),
            'domain'   => ini_get('session.cookie_domain'),
            'secure'   => isset($_SERVER['HTTPS']),
            'httponly' => true
        ];

        $this->setup();
    }

    protected function setup()
    {
        ini_set('session.use_cookies', 1);
        ini_set('session.use_only_cookies', 1);

        session_name($this->name);

        session_set_cookie_params(
            $this->cookie['lifetime'], $this->cookie['path'],
            $this->cookie['domain'], $this->cookie['secure'],
            $this->cookie['httponly']
        );
    }

}