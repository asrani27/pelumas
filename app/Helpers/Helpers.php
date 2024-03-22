<?php

function tenor($bulan)
{
    if ($bulan == 1) {
        return 30;
    } elseif ($bulan == 3) {
        return 90;
    } elseif ($bulan == 6) {
        return 180;
    } elseif ($bulan == 9) {
        return 270;
    } elseif ($bulan == 12) {
        return 365;
    }
}
