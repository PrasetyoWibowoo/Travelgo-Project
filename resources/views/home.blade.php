<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TravelGo</title>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
</head>

<body class="min-h-screen overflow-x-hidden">

@if(session('success'))
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white bg-opacity-30 rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-black transition duration-300 delay-100 hover:text-white">{{ session('success') }}</h2>
            <button id="close-popup" class="flex bg-opacity-70 mt-4 px-4 py-2 bg-green-500 text-white rounded transition duration-300 delay-100 hover:bg-black">Close</button>
        </div>
    </div>
@endif

<!-- Header -->
<header id="navbar" class="bg-white/5 transition duration-300 ease-in-out absolute z-10 top-0 left-0 w-full p-4 shadow-lg sticky">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="#" class="relative right-20 text-green-600 text-5xl font-lalezar text-shadow">TravelGo</a>
    <nav class="space-x-10 hidden md:flex left-40 top-3 relative">
      <a href="{{ route('home') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Home</a>
      <a href="{{ route('about') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">About Us</a>
      <a href="{{ route('blognews') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Blog & News</a>
      <a href="{{ route('product') }}" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Product</a>
      <a href="{{ route('register') }}" class="px-5 py-2 bg-green-500 text-center text-white text-2xl font-lalezar relative bottom-3 rounded-3xl hover:text-black text-shadow">Join Us</a>
    </nav>
  </div>
</header>


<script>
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 950) {
      navbar.classList.add('bg-custom-gray');
      navbar.classList.remove('bg-white/5');
    } else {
      navbar.classList.remove('bg-custom-gray');
      navbar.classList.add('bg-white/5');
    }
  });
</script>

<script>
    document.getElementById('close-popup')?.addEventListener('click', function() {
        this.closest('.fixed').style.display = 'none';
    });
</script>

<!-- Hero Section -->
<section class="relative">
  <img src="{{URL::asset('assets/img/travelgo.png')}}" alt="Hero Image" class="h-dvh w-full object-cover relative bottom-28 z-0">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
    <div class="w-[750px] left-[70rem] top-[35rem] absolute text-right text-white text-shadow text-6xl font-lalezar">PERMUDAH PERJALANANMU DENGAN TRAVELGO</div>
  </div>
</section>

<section>
    <div class="relative bottom-28 p-24 bg-green-500">
</section>

<!-- Main Content -->
<main class="container mx-auto py-16 space-y-10">
  <!-- Heading -->
  <div class="text-center mb-12">
    <h2 class="text-7xl md:text-7xl font-lalezar font-black mb-4">Bingung Mau Keluar Pake Apa?</h2>
    <p class="text-5xl font-black font-lalezar">JALANIN AJA PAKE <span class="text-green-600 font-black font-customFont">TRAVELGO</span> BRUMM.. BRUMMM..</p>
  </div>

  <img src="{{URL::asset('assets/img/Pel.png')}}" alt="Feature 1" class="w-68 h-full object-contain mx-auto hover:scale-105 transition-transform duration-300">

  <img src="{{URL::asset('assets/img/Aman.png')}}" alt="Feature 2" class="w-68 h-full object-contain ml-52 mx-auto hover:scale-105 transition-transform duration-300">

  <img src="{{URL::asset('assets/img/Cep.png')}}" alt="Feature 2" class="w-68 h-full object-contain ml-52 mx-auto hover:scale-105 transition-transform duration-300">
</main>

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
