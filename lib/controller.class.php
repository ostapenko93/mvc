<?php

class Controller
{

    protected $data;
    protected $model;
    protected $param;

    public function getData()
    {
        return $this->data;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getParam()
    {
        return $this->param;
    }

    public function __construct($data = [])
    {
        $this->data = $data;
        $this->param = App::getRouter()->getParams();

    }

}