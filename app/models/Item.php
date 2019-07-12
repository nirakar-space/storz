<?php
use Phalcon\Mvc\Model;
use Phalcon\Validation;


class Item extends Model
{
	public function initialize()
    {
        $this->setConnectionService('db');
    }
    public function getSource()
    {
        return 'item';
    }
}
