<?php

namespace App\Controllers;

class TestController extends BaseController
{
    public function handleTest()
    {
       $this->jsonResponse([
           'status' => 'success',
           'message' => 'Test endpoint reached successfully.'
       ]);       
    }
}