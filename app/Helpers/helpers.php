<?php
if (!function_exists('money_format')) {

    function money_format($str) {
        return 'Rp. ' . number_format($str,'0','','.'); 
    }
}
