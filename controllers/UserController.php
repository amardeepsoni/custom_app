<?php

class UserController extends Controller {
    public function index(){
        return $this->view->render('index');
    }
}