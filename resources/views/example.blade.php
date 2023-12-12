<!--
catatan:
1. akses/tambahkan file css, js, atau gambar pada folder public (bukan folder resources)
2. ambil link dari file css, js, atau gambar menggunakan "{{ asset('nama-folder/nama-file') }}"
3. akses/tambahkan file blade.php pada folder views
4. ambil link dari file blade.php menggunakan "{{ url('nama-route') }}" (akses file web.php untuk selengkapnya)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example | glammer</title>
    <link rel="icon" href="{{ asset('img/glammer-logo-2.png') }}">
    <!-- tambahkan link css DI SINI -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        body {
            display: flex;
            flex-direction: column;
        }

        .body-body {
            flex: 1;
        }

        /* <style> di atas JANGAN DIUBAH, KECUALI:
        jika html body MEMILIKI nama class, GANTI "body {}" dengan ".nama-class {}"
        contoh:
            html:
                <body class="abc">
            style:
                .abc {
                    display: flex;
                    flex-direction: column;
                }
        sedangkan jika html body TIDAK MEMILIKI nama class, maka "body {}" TIDAK PERLU diganti
        */
    </style>
</head>
<body>
    @include('navbar')

    <div class="body-body">
        <!-- tambahkan html body untuk halaman ini DI DALAM SINI -->
    </div>

    @include('footer')
</body>
</html>