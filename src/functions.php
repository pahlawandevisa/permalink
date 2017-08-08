<?php

if (! function_exists('permalink')) {

    function permalink($title, $separator = '-', $dropExtension = true)
    {
        return \Privateer\Permalink\Permalink::permalink($title, $separator, $dropExtension);
    }
}