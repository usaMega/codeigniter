<?php

namespace App\Controllers;

class Motto extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Motto',
        ];
        return view('motto' , $data);
    }
}