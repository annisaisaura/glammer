<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/detail.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('navbar')
@include('footer')
</br>
     <!--------------- Products description & Product detail (title)------------------->

    <div class="container-item">
        <div class="row row-2">
            <div class="col-2 teks"> 
                <h>Detail Product</h>
            </div>
            <div class="col-2 teks">
                <h>Deskripsi Produk</h>
            </div>
        </div>
    </div>
    <!--------------- Products description & Product detail (title)------------------->

    <!--------------- Products description & Product detail------------------->
    <div class="container-item">
        <div class="row">
            <div class="col">
                <table class="teks">
                    <tr>
                        <td>Length</td>
                        <td>70 cm</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>dress</td>
                    </tr>
                    <tr>
                        <td>Seelve Length</td>
                        <td>20 cm</td>
                    </tr>
                    <tr>
                        <td>Patterns</td>
                        <td>flower</td>
                    </tr>  
                    <tr>
                        <td>Material</td>
                        <td>linen</td>
                    </tr>    
                </table>
            </div>
            <div class="col">
               <p class="teks">Say hello to the Astra Floral Dress - your ultimate summer style sensation! This dress isn't just cool; it's cooler than a cucumber in a snowstorm! With its breezy, loose-fit design, you'll stay comfy and chill even in the scorching heat. And let's talk about those groovy patterns and eye-popping colors – it's like a party on fabric! Whether you're off to a picnic, a beach day, or just some laid-back fun, the Astra Floral Dress guarantees you'll be the most stylish and laid-back belle of the summer ball. Grab one before the sun sets on this sizzling deal!</p>
            </div>
        </div>
    </div>
     <!--------------- Other Product ------------------->



     <!--------------- Other Product (title) ------------------->
    <div class="container-item">
            <h class="judul">Others Product</h>
        </div>
    </div>
     <!--------------- Other Product (title) ------------------->



     <!--------------- Other Product ------------------->
    <div class="container-item">
        <div class="row">
            <div class="col-4">
                <a href=""><img src="{{ asset('img/dress8.png') }}"></a>
                <a href=""><p>Floral cotton minidress</p></a>
                <a href=""><p>Rp1.000.000</p></a>
            </div>
            <div class="col-4">
                <a href=""><img src= "{{ asset('img/dress1.png') }}" ></a>
                <a href=""><p>Maia Cutout Linen...</p></a>
                <a href=""><p>Rp1.000.000</p></a>
            </div>
            <div class="col-4">
                <a href=""><img src="{{ asset('img/dress2.png') }}"></a>
                <a href=""><p>Birdie printed linen...</p></a>
                <a href=""><p>Rp1.000.000</p></a>
            </div>
            <div class="col-4">
                <a href=""><img src="{{ asset('img/dress3.png') }}" ></a>
                <a href=""><p>Cutout linen floral...</p></a>
                <a href=""><p>Rp1.000.000</p></a>
            </div>
        </div>
    </div>
    <!--------------- Other Product ------------------->


</body>
</html>