<!DOCTYPE html>
<html>

<head>
 @include('Home.css')
</head>


  <style>
    html {
  scroll-behavior: smooth !important;
}
   body {
  background-color: #fdeef1 !important;
}
  </style>
</style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

   @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.product')
  <!-- end shop section -->







  <!-- contact section -->

  @include('home.contact')

  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')

  
</body>

</html>