<?php

class home extends controller {
    public function index()
    {
        $data['judul'] = 'home';
        $this->view('templates/header', $data);
        $this->view('home/index',);
        $this->view('templates/footer',);
    }
}