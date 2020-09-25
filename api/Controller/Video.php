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
        $url = 'https://www.youtube.com/watch?v=ndiD8V7zpAs';
        $path = 'public/videos/video.webm';
        $format = '(bestvideo[vcodec=vp9]/bestvideo)+(bestaudio[acodec=opus]/bestaudio)/best';
        unlink(__DIR__ . '/../' . $path);
        $output = shell_exec("youtube-dl --format '$format' '$url' -o'$path' 2>&1");
        return compact('output');
    }
}