<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>glammer</title>
    <style>
        .custom-bg-lightgray {
            background-color: #D9D9D9;
            /* Ganti dengan warna yang diinginkan */
        }

        .custom-bg-container {
            background-color: #fff5ee;
            ;
            /* Ganti dengan warna yang diinginkan */
        }

        .custom-col-size {
            width: 420px;
            /* Atur lebar kolom */
            height: 460px;
            /* Atur tinggi kolom */
        }

        .custom-col-size-opt {
            width: 90px;
            /* Atur lebar kolom */
            height: 116px;
            /* Atur tinggi kolom */
        }

        .custom-img {
            width: 50%;
            /* Atur lebar gambar sesuai kebutuhan */
            height: auto;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
        }

        .custom-img-opt {
            width: 38px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: 92px;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
        }

        .custom-color-img-opt {
            width: 30px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: 72px;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
        }

        .custom-color-opt {
            width: 69px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: 93px;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
            border-radius: 10px
        }

        .custom-col-size2 {
            width: 69px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: 57px;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
            border-radius: 10px;
            border-color: #2F4F4F;
            background-color: #FFF5EE;
        }

        .custom-col-size3 {
            width: 250px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: 70px;
            /* Biarkan tinggi otomatis menyesuaikan agar proporsi gambar tidak terdistorsi */
            border-radius: 10px;
            border-color: #2F4F4F;
            background-color: #FFF5EE;
        }

        .transparent-button {
            background-color: #FFF5EE;
            /* Merah dengan tingkat transparansi 0.5 */
            padding: 10px 20px;
            /* Sesuaikan padding sesuai kebutuhan Anda */
        }

        .custom-col-size-opt1 {
            width: 460px;
        }

        .custom-text {
            font-family: 'Poppins', sans-serif;
            color: #2F4F4F;
        }
    </style>
</head>

<body class="custom-bg-container">
    <div class="container custom-bg-container">
        <div class="container p-5 my-5 ">
            <div class="row m-0 p-0 gap-3">
                <div class="row custom-col-size gap-2">
                    <div class="col-sm-4 text-center custom-bg-lightgray custom-col-size p-2">
                        <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img">
                    </div>
                    <div class="col-sm-2 text-center  custom-bg-lightgray custom-col-size-opt mt-2 p-2">
                        <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img-opt">
                    </div>
                    <div class="col-sm-2 text-center  custom-bg-lightgray custom-col-size-opt mt-2 p-2">
                        <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img-opt">
                    </div>
                    <div class="col-sm-2 text-center  custom-bg-lightgray custom-col-size-opt mt-2 p-2">
                        <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img-opt">
                    </div>
                    <div class="col-sm-2 text-center  custom-bg-lightgray custom-col-size-opt mt-2 p-2">
                        <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img-opt">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row m-4 ml-2 mr-2 mt-0 mb-2 fs-3 fw-normal custom-text">
                        Astra Floral
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-2 mb-2 fs-6 fw-normal custom-text">
                        Linen Midi Dress
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 fs-3 fw-normal custom-text">
                        Rp. 150.000
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 fs-6 fw-normal custom-text">
                        Color
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-2 mb-2 gap-2">
                        <div class="col-sm-2 text-center custom-bg-lightgray custom-color-opt p-2">
                            <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-color-img-opt">
                        </div>
                        <div class="col-sm-2 text-center custom-bg-lightgray custom-color-opt p-2">
                            <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-color-img-opt">
                        </div>
                        <div class="col-sm-2 text-center custom-bg-lightgray custom-color-opt p-2">
                            <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-color-img-opt">
                        </div>
                        <div class="col-sm-2 text-center custom-bg-lightgray custom-color-opt p-2">
                            <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-color-img-opt">
                        </div>
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 fs-6 fw-normal custom-text">
                        Size
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-2 mb-2 gap-2">
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            XL
                        </button>
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            L
                        </button>
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            M
                        </button>
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            S
                        </button>
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 fs-6 fw-normal custom-text">
                        Quantity
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-2 mb-2">
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            +
                        </button>
                        <div class="col-sm-2 text-center border custom-col-size2 p-3 custom-text">
                            1
                        </div>
                        <button class="col-sm-2 text-center border transparent-button custom-col-size2 p-3 custom-text">
                            -
                        </button>
                    </div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 gap-2"></div>
                    <div class="row m-4 ml-2 mr-2 mt-4 mb-2 gap-2">
                        <button class="col-sm-2 text-center border transparent-button custom-col-size3 p-3 custom-text">
                            <img src="{{ asset('img/dress6.png') }}" alt="dress6" class="custom-img">
                            Add To Cart
                        </button>
                        <button class="col-sm-2 text-center border transparent-button custom-col-size3 p-3 custom-text">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>