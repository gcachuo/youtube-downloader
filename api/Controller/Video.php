<?php


namespace Controller;


use Controller;

class Video extends Controller
{
    public function __construct()
    {
        parent::__construct([
            'POST' => [
                'descarga' => 'downloadVideo'
            ]
        ]);
    }

    protected function downloadVideo()
    {

    }
}