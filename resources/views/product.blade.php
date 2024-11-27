<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-custom-bg overflow-y-scroll overflow-x-hidden w-screen h-screen m-0">

<!-- Header -->
<header id="navbar" class="bg-custom-gray transition duration-300 ease-in-out absolute z-10 top-0 left-0 w-full p-4 shadow-lg sticky">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="#" class="relative right-20 text-green-600 text-5xl font-lalezar text-shadow">TravelGo</a>
    <nav class="space-x-10 hidden md:flex left-40 top-3 relative">
      <a href="{{ route('home') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Home</a>
      <a href="{{ route('about') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">About Us</a>
      <a href="{{ route('blognews') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Blog & News</a>
      <a href="{{ route('product') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Product</a>
      <a href="{{ route('home') }}" class="px-5 py-2 bg-green-500 text-center text-white text-2xl font-lalezar relative bottom-3 rounded-3xl hover:text-black text-shadow">Join Us</a>
    </nav>
  </div>
</header>

    <!-- Section Hijau -->
    <img src="{{URL::asset('assets/img/produkatas.png')}}" alt="driver muncul dari hp" class="mb-64 w-full h-auto">


    <!-- Product Menu -->
    <div class="relative bottom-44 flex gap-40 justify-center">
        <div class="bg-custom-text transition duration-300 delay-100 hover:bg-black cursor-pointer py-3 px-1 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl transition duration-300 delay-100 hover:text-white text-black font-bold">Motor</a>
        </div>
        <div class="bg-custom-text py-3 px-1 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Mobil</a>
        </div>
        <div class="bg-custom-text py-3 px-1 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Kereta</a>
        </div>
        <div class="bg-custom-text py-3 px-1 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Pesawat</a>
        </div>
    </div>
<main class="container bottom-28 relative mx-auto">
<hr class="mb-10 my-1 border-t border-white">
  <img src="{{URL::asset('assets/img/prod1.png')}}" alt="Feature 1" class="w-auto h-auto -mb-32 mx-auto hover:scale-105 transition-transform duration-300">
  <img src="{{URL::asset('assets/img/prod2.png')}}" alt="Feature 2" class="w-68 h-full -mb-32 ml-52 mx-auto hover:scale-105 transition-transform duration-300">
  <img src="{{URL::asset('assets/img/prod3.png')}}" alt="Feature 2" class="w-68 h-full -mb-32 ml-52 mx-auto hover:scale-105 transition-transform duration-300">
  <img src="{{URL::asset('assets/img/prod3.png')}}" alt="Feature 2" class="w-68 h-full -mb-32 ml-52 mx-auto hover:scale-105 transition-transform duration-300">
</main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto grid md:grid-cols-3 top-16 relative">
    <div>
      <h1 class="text-4xl font-bold text-green-600 mb-4">Travelgo</h1>
      <div class="flex space-x-20">
    <a href="#" class="text-2xl hover:text-green-500 mr-3 relative">Home</a>
    <a href="#" class="text-2xl hover:text-green-500">Blog & News</a>
  </div>
  <div class="flex space-x-20 text-left mb-4">
    <a href="#" class="text-2xl hover:text-green-500">Join Us</a>
    <a href="#" class="text-2xl hover:text-green-500">Cookie Settings</a>
    </div>

    <input type="email" placeholder="Send your email" class="left-64 p-2 w-80 rounded-xl text-gray-700 z-0"> 
    <button class="mr-10 absolute hover: py-1 z-10">
    <img src="{{ URL::asset('assets/img/Submit.png') }}" alt="Deskripsi Gambar" class="">
    </button>
  </div>
    </div>
      </div>
      <!--Line tengah-->
      <div class="h-52 w-px relative bottom-36 left-1/2 bg-gray-500"></div>

      <div class="flex space-y-14 relative left-3/4 bottom-72">
      <h1 class="text-2xl">Follow and keep updated!</h1>
      <div class="flex relative right-64 space-x-8">
      <a href="https://www.linkedin.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
    <img src="{{ URL::asset('assets/img/bxl-linkedin.png') }}" alt="Deskripsi Gambar" class="">
    </a>
      <a href="https://www.twitter.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
    <img src="{{ URL::asset('assets/img/bxl-twitter.png') }}" alt="Deskripsi Gambar" class="">
    </a>
      <a href="https://www.instagram.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
    <img src="{{ URL::asset('assets/img/bxl-instagram-alt.png') }}" alt="Deskripsi Gambar" class="">
    </a>
      <a href="https://www.youtube.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
    <img src="{{ URL::asset('assets/img/bxl-youtube.png') }}" alt="Deskripsi Gambar" class="">
    </a>
      <a href="https://www.github.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
    <img src="{{ URL::asset('assets/img/bxl-github.png') }}" alt="Deskripsi Gambar" class="">
    </div>
    </a>
      </div>

      <div class="text-center text-xl relative bottom-36">
    <p>TravelGo | 2024 All Rights Reserved</p>
  </div>
  </div>
</footer>
</body>

</html>