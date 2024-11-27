<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Layout</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-custom-bg overflow-y-scroll overflow-x-hidden w-screen h-screen m-0">

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

<section>
<img src="{{URL::asset('/assets/img/hpblogandnews.jpg')}}" class="relative">
</section>

  <!-- Hero Section -->
  <section class="py-24">
      <div class="mt-6 space-x-64 text-center">
        <button class="px-6 py-2 bg-green-600 text-white rounded-full w-64 h-24 hover:bg-green-700">Culture</button>
        <button class="px-6 py-2 bg-green-600 text-white rounded-full w-64 h-24 hover:bg-green-700">News</button>
        <button class="px-6 py-2 bg-green-600 text-white rounded-full  w-64 h-24 hover:bg-green-700">All</button>
      </div>
    </div>
  </section>

  <!-- Culture Section -->
  <section class="py-10">
    <div class="container mx-auto px-4">
      <h3 class="text-8xl font-extrabold mb-6">Culture</h3>
      <hr class="mt-1 border-t-2 h-10 border-black w-full">
    </div>
  </section>

  <section class="container mx-auto px-4">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <img src="{{URL::asset('/assets/img/news1.png')}}" alt="Culture 2" class="w-full rounded mb-2">
          <p class="text-lg font-semibold flex-initial">Coming Soon</p>
        </div>
      </div>
  </section>

  <section class="container mx-auto px-4">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <img src="https://via.placeholder.com/300x200" alt="Culture 1" class="w-full rounded mb-2">
          <p class="text-lg font-semibold">Headline for Culture News</p>
        </div>
  </section>

  <!-- News Section -->
  <section class="py-10">
    <div class="container mx-auto px-4">
      <h3 class="text-6xl font-extrabold mb-6">News</h3>
      <hr class="mt-1 border-t-2 h-10 border-black w-full">
      <div class="space-y-6">

        @foreach ($news as $news)
        <div class="flex gap-4">
          <img src="{{ asset('storage/' . $news->image)}}" alt="News 1" class="w-6/12 rounded">
          <div>
            <p class="text-lg font-semibold">{{ $news->title }}</p>
            <p class="text-gray-600">{{ $news->description }}</p>
          </div>
        </div>
        @endforeach
        
  <section class="py-10">
    <div class="container mx-auto px-4">
      <h3 class="text-8xl font-extrabold mb-6">All</h3>
      <hr class="mt-1 border-t-2 h-10 border-black w-full">
    </div>
  </section>

  <section class="container mx-auto px-4">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="flex gap-4">
          <img src="https://via.placeholder.com/300x200" alt="Culture 1" class="w-full rounded mb-10">
        </div>
    <div class="flex gap-4">
          <img src="https://via.placeholder.com/300x200" alt="Culture 1" class="w-full rounded mb-10">
        </div>
        </div>
  </section>

 <!-- Footer -->
<footer class="bg-gray-800 text-white py-8 px-4 md:px-16">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
    <!-- Logo and Links -->
    <div class="text-center md:text-left mb-6 md:mb-0">
      <h3 class="text-4xl font-bold text-green-600 mb-4 mb-6">Travelgo</h3>
      <ul class="mt-4 space-y-2 text-2xl grid grid-cols-2">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">Blog & News</a></li>
        <li><a href="#" class="hover:underline">Join Us</a></li>
        <li><a href="#" class="hover:underline">Product</a></li>
      </ul>
      <input type="email" placeholder="Send your email" class="p-2 w-full rounded-md text-gray-700 mt-10 w-72 h-12">
    </div>

    <!-- Social Media Links -->
    <div class="flex justify-center space-x-4">
      <a href="fa-brands fa-square-x-twitter"class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
    </div>
  </div>
  <div class="text-center mt-4 text-2xl">
    <p>TravelGo | 2024 All Rights Reserved</p>
  </div>
</footer>

</body>
</html>
