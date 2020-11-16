<?php

class Validation {

    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function check($page)
    {
        if ($this->request['name'] == 'rida@gmail.com' && $this->request['password'] == '123456') {
            header("Location: $page");
        } else {
            var_dump('error');
        }
    }
}

