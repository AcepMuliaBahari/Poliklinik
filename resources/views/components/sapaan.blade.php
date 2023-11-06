
@php
    date_default_timezone_set('Asia/Jakarta'); // Sesuaikan dengan zona waktu Anda

    $waktu = date('H'); // Ambil hanya jam (format 24 jam)
    $sapaan = '';

    if ($waktu >= 3 && $waktu < 11) {
        $sapaan = 'Selamat Pagi';
    } elseif ($waktu >= 11 && $waktu < 16) {
        $sapaan = 'Selamat Siang';
    } elseif ($waktu >= 16 && $waktu < 19) {
        $sapaan = 'Selamat Sore';
    } else {
        $sapaan = 'Selamat Malam';
    }
@endphp

<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ $sapaan }},
</h2>

