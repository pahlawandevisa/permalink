<?php

if (! function_exists('str_permalink')) {

    function str_permalink($title, $separator = '-')
    {
        return \Privateer\Permalink\Permalink::permalink($title, $separator);
    }
}