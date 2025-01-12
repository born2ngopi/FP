<?php
session_start();

class LikesMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new LikesModel;
    }
    public function getCountLikes()
    {
        return $this->model->countLikes();
    }
}
