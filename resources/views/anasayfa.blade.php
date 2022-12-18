<!-- if else  -->
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Dersleri</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body>


    <!-- if else -->
    <h3>if else kullanımı</h3>
    @php
        $sayi = 10;
    @endphp

    @if ($sayi > 5)
        5ten büyüktür
    @else
        5ten küçüktür
    @endif
    <hr>

    <!-- Switch -->
    <h3>Switch Case kullanımı</h3>

    @switch($sayi)
        @case(1)
            sayı 1' eşittir
        @break

        @case(2)
            sayı 2' eşittir
        @break

        @case(3)
            sayı 3' eşittir
        @break

        @case(10)
            sayı 10' eşittir
        @break

        @default
            Sayı eşiti bulunamadı
    @endswitch


    <hr>
    <!-- For -->
    <h3>For Döngüsü kullanımı</h3>
    @for ($i = 0; $i < 5; $i++)
        {{ $i }} ' eşittir <br>
    @endfor

    <hr>
    <!-- foreach -->
    <h3>Foreach Döngüsü kullanımı</h3>
    @php
        $isimler = ['oruç', 'asim', 'kadir'];
    @endphp
    @foreach ($isimler as $isim)
        {{ $isim }} <br>
    @endforeach



    <hr>
    <!-- while -->
    <h3>While Döngüsü kullanımı</h3>
    @php
        $sayi = 1;
    @endphp

    @while ($sayi < 5)
        {{ $sayi }} <br>
        @php
            $sayi = $sayi + 1;
        @endphp
    @endwhile



</body>

</html>
