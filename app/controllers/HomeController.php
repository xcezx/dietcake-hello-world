<?php
class HomeController extends AppController
{
    public function index()
    {
        $greeting = new Greeting(array('name' => Param::get('name', 'John Doe')));
        $this->set('greeting', $greeting);
    }
}