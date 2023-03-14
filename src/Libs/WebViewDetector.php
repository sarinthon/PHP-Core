<?php

namespace ShuGlobal\Core\Libs;

class WebViewDetector
{
    /**
     * @return bool
     */
    public static function isWebView(): bool {
        $isMobilePos = strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile/');
        $isSafariPos = strpos($_SERVER['HTTP_USER_AGENT'], 'Safari/');

        if(($isMobilePos !== false) && ($isSafariPos == false)) {
            // Check web engine for WebView
            return true;
        }
        elseif(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            // Check package name for WebView
            return true;
        }

        return false;
    }
}