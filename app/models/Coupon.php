<?php
use Phalcon\Mvc\Model;
use Phalcon\Validation;


class Coupon extends Model
{
	public function initialize()
    {
        $this->setConnectionService('db');
    }
    public function getSource()
    {
        return 'coupon';
    }
}
