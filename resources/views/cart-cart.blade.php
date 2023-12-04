<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart (3) | glammer</title>
    <link rel="icon" href="{{ asset('img/glammer-logo-2.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="app.js"></script>
</head>
<body>
    @include('navbar-cart-3')

    <!-- laman cart -->
    <div class="cart-page" >
        <div class="cart-container">
            <!-- bar atas -->
            <div class="top-bar"> <!-- kotak putih atasnya -->
                <div>
                    <i class="fa-regular fa-square fa-lg" style="color: #C0C0C0;"></i>
                </div>
                <div>
                    Product
                </div>
                <div>
                    Unit Price
                </div>
                <div>
                    Quantity
                </div>
                <div>
                    Total Price
                </div>
            </div>
        </div>
        <br>

        <!-- list item -->
        <div class="item-list">
            <div class="item-container">
                <div>
                    <i class="fa-regular fa-square fa-lg" style="color: #C0C0C0;"></i>
                </div>
                <div class="item-img">
                    <img src="{{asset('img/dress7.png') }}" alt="Your Image">
                </div>
                <div class="item-desc">
                    <div class="item-name">
                        Kenzie Patchwork Linen Midi Dress
                    </div>
                    <div class="item-variation">
                        <div class="item-variation-name">
                            G-Y-P, M
                        </div>
                        <div class="item-variation-btn">
                            <i class="fa-solid fa-chevron-down fa-2xs" style="color: #000000;"></i> <!-- nanti ganti icon -->
                        </div>                        
                    </div>
                </div>
                <div>
                    Rp1.000.000
                </div>
                <div class="quantity">
                    <div class="quantity-min-btn">
                        -
                    </div>
                    <div class="quantity-number">
                        1
                    </div>
                    <div class="quantity-plus-btn">
                        +
                    </div>
                </div>
                <div class="item-total-price">
                    Rp1.000.000
                </div>
            </div>

            <div class="item-container">
                <div>
                    <i class="fa-regular fa-square fa-lg" style="color: #C0C0C0;"></i>
                </div>
                <div class="item-img">
                    <img src="{{asset('img/dress8.png') }}" alt="Your Image">
                </div>
                <div class="item-desc">
                    <div class="item-name">
                        Floral Cotton Mini Dress
                    </div>
                    <div class="item-variation">
                        <div class="item-variation-name">
                            G-Y-P, M
                        </div>
                        <div class="item-variation-btn">
                            <i class="fa-solid fa-chevron-down fa-2xs" style="color: #000000;"></i> <!-- nanti ganti icon -->
                        </div>                        
                    </div>
                </div>
                <div>
                    Rp1.000.000
                </div>
                <div class="quantity">
                    <div class="quantity-min-btn">
                        -
                    </div>
                    <div class="quantity-number">
                        1
                    </div>
                    <div class="quantity-plus-btn">
                        +
                    </div>
                </div>
                <div class="item-total-price">
                    Rp1.000.000
                </div>
            </div>
        </div>

        <!-- bar checkout -->
        <div class="checkout-bar">
            <div>
                <i class="fa-regular fa-square fa-lg" style="color: #C0C0C0;"></i>
            </div>
            <div>
                Select All (2)
            </div>
            <div>
                Delete
            </div>
            <div class="total-price">
                Total (0 Items): <span style="color: #FE5C2B; font-size: 24px;">Rp 0</span>
            </div>
            <div class="checkout-btn">
                Checkout
            </div>
        </div>
    </div>
</body>
</html>