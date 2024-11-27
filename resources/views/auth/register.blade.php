<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travelgo Signup</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-white">
<form action="{{ route('register') }}" method="POST">
@csrf
  <div class="flex min-h-screen">
    <!-- Left Section -->
      <img src="{{URL::asset('assets/img/Login.png')}}" alt="Travelgo Illustration" class="flex flex-col justify-center items-center w-auto h-dvh">

    <!-- Right Section -->
    <div class="flex-1 flex justify-center items-center p-6">
      <div class="w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-2xl font-bold">Get's started!</h2>
          <a href="#" class="text-green-500 text-xl font-bold">X</a>
        </div>

        <!-- Sign up buttons -->
        <div class="flex gap-4 mb-4">
          <button class="flex-1 border border-gray-300 rounded-md py-2 flex items-center justify-center gap-2">
            <img src="{{URL::asset('assets/img/Google.png')}}" alt="Google Icon" class="w-5 h-5">
            <span>Sign up with Google</span>
          </button>
          <button class="flex-1 border border-gray-300 rounded-md py-2 flex items-center justify-center gap-2">
            <img src="{{URL::asset('assets/img/Apple.png')}}" alt="Apple Icon" class="w-5 h-5">
            <span>Sign up with Apple</span>
          </button>
        </div>

        <div class="flex items-center mb-6">
          <div class="border-t border-gray-300 flex-grow"></div>
          <span class="px-3 text-gray-500">or</span>
          <div class="border-t border-gray-300 flex-grow"></div>
        </div>

        <!-- Form -->
        <form>
          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1" for="email">Email Address</label>
            <div class="relative">
              <input type="email" id="email" name="email" placeholder="Input your email" class="w-full border border-green-500 rounded-md px-4 py-2 pl-10 focus:outline-none">
              <img src="{{URL::asset('assets/img/mail.png')}}" class="h-5 w-5 absolute top-3 left-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a8 8 0 10-8 0 8 8 0 008 0z" />
            </div>
          </div>

          <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-1" for="password">Password</label>
            <div class="relative">
              <input type="password" id="password" name="password" placeholder="Create your password" class="w-full border border-green-500 rounded-md px-4 py-2 pl-10 focus:outline-none">
              <img src="{{URL::asset('assets/img/lock.png')}}" class="h-5 w-5 absolute top-3 left-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.44-2.03 0-3.75-2.5-3.75S7 8.97 8.5 11c.5.73 1 1.75 1.5 2.5m1.5 4h4M15 11.75l4.25 4.25M19.5 11.25L15 15.5" />
            </div>
          </div>

          <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-1" for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" class="w-full border border-green-500 rounded-md px-4 py-2 focus:outline-none" required>
    </div>

          <!-- Login link -->
          <p class="text-sm text-gray-500 mb-4">
            Have an account? <a href="{{ route('home') }}" class="text-green-500 font-medium">Login Here!</a>
            @if ($errors->any())
    <div class="mb-4">
        <ul class="text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          </p>



          <!-- Register button -->
          <button type="submit" class="w-full bg-green-500 text-white font-bold py-2 rounded-md hover:bg-green-600">Register</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>