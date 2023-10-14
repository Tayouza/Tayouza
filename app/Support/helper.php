<?php

if (! function_exists('browser')) {
    function browser(): string
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT']; // Get the User-Agent header

        $browserName = '';

        // Define regular expressions to match common browser names
        $patterns = [
            '/(MSIE|Trident)/i' => 'Internet Explorer',
            '/Firefox/i' => 'Firefox',
            '/Chrome/i' => 'Google Chrome',
            '/Safari/i' => 'Safari',
            '/Edge/i' => 'Microsoft Edge',
            '/Opera/i' => 'Opera',
            '/OPR/i' => 'Opera',
        ];

        foreach ($patterns as $pattern => $name) {
            if (preg_match($pattern, $userAgent)) {
                $browserName = $name;
                break;
            }
        }

        return $browserName;
    }
}