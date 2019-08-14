<?php

namespace Abr4xas\NovaHelloDolly\Http\Controllers;

/**
 * Hello Dolly from WordPress
 * http://wordpress.org/plugins/hello-dolly/
 */
class NovaHelloDollyController
{
    public function hello_dolly_get_lyric()
    {
        /** These are the lyrics to Hello Dolly */
        $lyrics = "Hello, Dolly
        Well, hello, Dolly
        It's so nice to have you back where you belong
        You're lookin' swell, Dolly
        I can tell, Dolly
        You're still glowin', you're still crowin'
        You're still goin' strong
        I feel the room swayin'
        While the band's playin'
        One of our old favorite songs from way back when
        So, take her wrap, fellas
        Dolly, never go away again
        Hello, Dolly
        Well, hello, Dolly
        It's so nice to have you back where you belong
        You're lookin' swell, Dolly
        I can tell, Dolly
        You're still glowin', you're still crowin'
        You're still goin' strong
        I feel the room swayin'
        While the band's playin'
        One of our old favorite songs from way back when
        So, golly, gee, fellas
        Have a little faith in me, fellas
        Dolly, never go away
        Promise, you'll never go away
        Dolly'll never go away again";

        // Here we split it into lines.
        $lyrics = explode("\n", $lyrics);

        // And then randomly choose a line.
        return $lyrics[ mt_rand(0, count($lyrics) - 1) ];
    }

    /**
     *
     */
    public function index()
    {
        return $this->hello_dolly_get_lyric();
    }
}
