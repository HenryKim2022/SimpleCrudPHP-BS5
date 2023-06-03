<?php

function convert2idr($amount = 0)
{
    $formattedAmount = number_format($amount, 0, ',', '.');
    $formattedAmount = 'Rp ' . $formattedAmount;

    return $formattedAmount;
}

// echo convert2idr(12000);
