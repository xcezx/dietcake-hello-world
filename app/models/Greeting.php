<?php
class Greeting extends AppModel
{
    public function __toString()
    {
        return "Hello {$this->name} !!";
    }
}
