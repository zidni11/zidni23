<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Receipt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 0;
            border: 0;
            size: 80mm 100%;
        }

        body {
            font-size: 9pt;
            font-family: 'Inconsolata', monospace;
            text-align: justify;
        }

        .code2-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            /* justify-content: center; Mengatur perataan horizontal */
        }

        .code2 {
            display: block;
            margin: 5px; /* Jarak antara setiap kode */
            padding: 12px;
            border: 1px solid #000; /* Tambahkan border agar berada dalam kotak */
        }

        .code {
            font-size: 70px;
            font-family: 'Libre Barcode 128 Text', cursive;
        }
    </style>
</head>
<body>
    @if ($product)
        <div class="code">
            <div class="code2-container">
                @foreach ($codes as $code)
                    <span class="code2">{{ $code }}</span>
                @endforeach
            </div>
        </div>
    @endif

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            window.print();
            (myURL,5000);
        });

        function myURL() {
            document.location.href = "{{ route('produk.index') }}";
            clearInterval(interval);
        }
    </script>
</body>
</html>
