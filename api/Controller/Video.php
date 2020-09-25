<?php


namespace Controller;


use Controller;
use System;

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
        System::check_value_empty($_POST, ['video-url'], 'Missing Data.');
        $url = $_POST['video-url'];

        $path = 'public/videos/video.webm';
        $format = '(bestvideo[vcodec=vp9]/bestvideo)+(bestaudio[acodec=opus]/bestaudio)/best';

        unlink(__DIR__ . '/../' . $path);
        $output = shell_exec("youtube-dl --format '$format' '$url' -o'$path' --no-warnings 2>&1");

        return compact('output');
    }
}