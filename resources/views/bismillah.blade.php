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
            border: 10px;
            border-radius: 10px;
            border-color: #2F4F4F;
            background-color: #FFF5EE;
        }

        .transparent-button {
            background-color: #FFF5EE;
            /* Merah dengan tingkat transparansi 0.5 */
            color: #fff;
            border: 2px solid #fff;
            /* Menambahkan border putih sebanyak 2px */
            padding: 10px 20px;
            cursor: pointer;
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
                        <button class="col-sm-2 text-center custom-col-size3 transparent-button p-3 custom-text">
                            <svg width="40px" height="40px" viewBox="0 0 24.00 24.00" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#FE5C2B">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M8.7351 14.0181C8.91085 13.6985 9.24662 13.5 9.61132 13.5H16.47C17.22 13.5 17.88 13.09 18.22 12.47L21.6008 6.33041C21.7106 6.13097 21.7448 5.91025 21.7129 5.70131C21.8904 5.52082 22 5.27321 22 5C22 4.44772 21.5523 4 21 4H6C5.96703 4 5.93443 4.0016 5.90228 4.00471L5.7317 3.64435C5.40095 2.94557 4.69708 2.5 3.92398 2.5H2.92004C2.36776 2.5 1.92004 2.94772 1.92004 3.5C1.92004 4.05228 2.36776 4.5 2.92004 4.5H3.14518C3.6184 4.5 4.04931 4.77254 4.25211 5.20011L7.08022 11.1627C7.35632 11.7448 7.33509 12.4243 7.02318 12.988L6.17004 14.53C5.44004 15.87 6.40004 17.5 7.92004 17.5H18.92C19.4723 17.5 19.92 17.0523 19.92 16.5C19.92 15.9477 19.4723 15.5 18.92 15.5H9.61131C8.85071 15.5 8.36855 14.6845 8.7351 14.0181Z"
                                        fill="#ffffff"></path>
                                    <path
                                        d="M7.92005 18.5C6.82005 18.5 5.93005 19.4 5.93005 20.5C5.93005 21.6 6.82005 22.5 7.92005 22.5C9.02005 22.5 9.92005 21.6 9.92005 20.5C9.92005 19.4 9.02005 18.5 7.92005 18.5Z"
                                        fill="#ffffff"></path>
                                    <path
                                        d="M17.9201 18.5C16.8201 18.5 15.9301 19.4 15.9301 20.5C15.9301 21.6 16.8201 22.5 17.9201 22.5C19.0201 22.5 19.9201 21.6 19.9201 20.5C19.9201 19.4 19.0201 18.5 17.9201 18.5Z"
                                        fill="#ffffff"></path>
                                </g>
                            </svg>
                            Add To Cart
                        </button>
                        <button
                            class="col-sm-2 text-center transparent-button custom-col-size3 p-3 custom-text">
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