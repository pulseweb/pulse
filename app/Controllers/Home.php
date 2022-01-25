<?php

namespace APP\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view("welcome");
    }
}
