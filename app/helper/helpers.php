

<?php

function number_to_words($number)
{
    $hundreds = [
        '',
        'seratus',
        'dua ratus',
        'tiga ratus',
        'empat ratus',
        'lima ratus',
        'enam ratus',
        'tujuh ratus',
        'delapan ratus',
        'sembilan ratus',
    ];

    $tens = [
        '',
        'sepuluh',
        'dua puluh',
        'tiga puluh',
        'empat puluh',
        'lima puluh',
        'enam puluh',
        'tujuh puluh',
        'delapan puluh',
        'sembilan puluh',
        'ribu',
        'sebelas'
    ];

    $units = [
        '',
        'satu',
        'dua',
        'tiga',
        'empat',
        'lima',
        'enam',
        'tujuh',
        'delapan',
        'sembilan',
        
        
    ];

    $number = number_format($number, 2, '.', '');

    list($integerPart, $decimalPart) = explode('.', $number . '.00');

    $result = [];

    // Process integer part
if ($integerPart > 0) {
    $integerPart = sprintf('%03d', $integerPart);
    $result[] = $hundreds[$integerPart[0]];

    if ($integerPart[1] > 1) {
        $result[] = $tens[$integerPart[1]];
        if (isset($tens[$integerPart[1] . $integerPart[2]])) {
            $result[] = $tens[$integerPart[1] . $integerPart[2]];
        } else {
            $result[] = $units[$integerPart[2]];
        }
    } elseif ($integerPart[1] == 1) {
        if (isset($tens[$integerPart[1] . $integerPart[2]])) {
            $result[] = $tens[$integerPart[1] . $integerPart[2]];
        } else {
            $result[] = $units[$integerPart[2]];
        }
    } else {
        $result[] = $units[$integerPart[2]];
    }
}

    // Process decimal part
    if ($decimalPart > 0) {
        $result[] = 'koma';
        $result[] = implode(' ', str_split($decimalPart));
    }

    return implode(' ', $result);
}

