<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelGo</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white max-w-full overflow-x-hidden">

    <!-- Header -->
    <header id="navbar" class="bg-white/5 transition duration-300 ease-in-out absolute z-10 top-0 left-0 w-full p-4 shadow-lg sticky">
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

  <!-- Hero Section -->
  <section class="mt-32 relative">
    <div class="space-x-0 container mx-auto place-items-end mt-16 px-10">
    <h1 class="text-7xl font-extrabold font-poppins text-left w-200">
      <span class="text-green-500">TRAVELGO GROWS</span>
    <br />
      <span>WITH</span>
      <span class="text-lime-400">YOUR LIFE</span>
    </h1>
      <p class="left-16 relative mt-4 w-1/2 text-gray-300 text-3xl font-poppins">melalui Travelgo, melangkah bersama menuju perkembangan</p>
      </div>
      <img src="{{URL::asset('/assets/img/cricleabout.png')}}" class="relative size-1/4 mx-auto bottom-80 right-72">
      <img src="{{URL::asset('/assets/img/containerabout.png')}}" class="mx mx-auto bottom-[190px] relative flex justify-center items-center">
  </section>

  <section class="bg-green-500 py-8 h-60">
    <div class="container mx-auto px-6">
      <h2 class="text-black text-6xl font-extrabold mb-2 font-poppins mt-5">Tentang Kami</h2>
      <p class="text-black text-3xl font-poppins">
        Travelgo adalah platform yang menyediakan layanan transportasi ke berbagai tempat yang ingin dikunjungi.
      </p>
    </div>
  </section>

  <!-- Location Section -->
   <sectio class="py-16">
    <h2 class="text-5xl font-poppins ml-24 mt-64 m-20">Berlokasi diJl. DI Panjaitan No.128, Karangreja, <br> Purwokerto Kulon, Kec. Purwokerto Sel,</br> Kabupaten Banyumas, Jawa Tengah 53141</h2>
    <img src="{{URL::asset('/assets/img/locabout.png')}}" class="relative left-[71rem] bottom-52 mb-20 w-auto h-auto">
    </section>

    <!-- Develop Section -->
     <section class="pb-10">
      <h2 class="left-2/4 relative text-5xl font-poppins mr-64">Didukung dengan laju perkembangan<br>terupdate disetiap masanya dan ikut</br>mengatasi permasalahan anda</br> dikehidupan sehari-hari.</h2>
      <img src="{{URL::asset('/assets/img/compabout.png')}}" class="relative bottom-80 left-52 w-auto h-auto">
    </section>
  
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