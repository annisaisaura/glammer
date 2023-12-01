<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/category.css')}}">
    <title>Product Category</title>
</head>
<body>
<!--------------- Products Category ------------------->
</br>
<div class="small-container">
  <div class="row row-2">
      <div class="col-2">
          <a href="{{ url('/product_category_3') }}"><img src="{{ asset('img/dress1.png') }}" ></a>
          <a href="{{ url('/product_category_3') }}"><p>Dresses</p></a>
      </div>
      <div class="col-2">
          <a href=""><img src="{{ asset('img/tops1.png') }}" ></a>
          <a href=""><p>tops</p></a>
      </div>
      <div class="col-2">
          <a href=""><img src="{{ asset('img/pants1.png') }}" ></a>
          <a href=""><p>Pants</p></a>
      </div>
      <div class="col-2">
          <a href=""><img src="{{ asset('img/skirt2.png') }}" ></a>
          <a href=""><p>Skirt</p></a>
      </div>
      <div class="col-2">
        <a href=""><img src="{{ asset('img/beachwear3.png') }}" ></a>
        <a href=""><p>Beachwear</p></a>
    </div>
    <div class="col-2">
      <a href=""><img src="{{ asset('img/shirts1.png') }}" ></a>
      <p>Shirts</p>
    </div>
  </div>  
</div>
<!--------------- Products ------------------->
<div class="small-container">
  <div class="row">
    <div class="col-4">
        <a href=""><img src="{{ asset('img/beachwear1.png') }}" ></a>
        <a href=""><h4>Raie Printed Bandeau..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/dress1.png') }}" ></a>
        <a href=""><h4>Maia Cutout Linen..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href="{{ url('/product_detail') }}"><img src="{{ asset('img/dress6.png') }}" ></a>
        <a href="{{ url('/product_detail') }}"><h4>Astra Floral Linen..</h4></a>
        <a href="{{ url('/product_detail') }}"><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/shirts1.png') }}" ></a>
        <a href=""><h4>Astra Floral Draw..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
        <a href=""><img src="{{ asset('img/skirt1.png') }}" ></a>
        <a href=""><h4>Gradient Skirt</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/tops1.png') }}" ></a>
        <a href=""><h4>Floral Neck String Top</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/beachwear2.png') }}" ></a>
        <a href=""><h4>Ginger Scarf Printed..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/dress2.png') }}" ></a>
        <a href=""><h4>Birdie Printed Linen..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
        <a href=""><img src="{{ asset('img/pants2.png') }}" ></a>
        <a href=""><h4>Ira Floral Linen Pants</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/beachwear3.png') }}" ></a>
        <a href=""><h4>Chintz Floral Bikini</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/dress4.png') }}" ></a>
        <a href=""><h4>Seeker Printed Linen..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
    <div class="col-4">
        <a href=""><img src="{{ asset('img/pants3.png') }}" ></a>
        <a href=""><h4>Maia High-rise Linen..</h4></a>
        <a href=""><p>Rp1.000.000</p></a>
    </div>
</div>
</br></br>
<div class="center-container">
  <div class="page-btn">
    <a href="{{ url('/product_category') }}"><span>1</span></a>
    <a href="{{ url('/product_category_2') }}"><span>2</span></a>
  </div>
</div>
</body>
</html>