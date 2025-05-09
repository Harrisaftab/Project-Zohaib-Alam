<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- MDB CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- MDB JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.js"></script>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <div class="min-h-screen d-flex flex-column justify-content-center align-items-center pt-5" 
        style="min-height: 100vh; background: url('assets/images/dummy-img/testi-1.png') no-repeat center center; background-size: cover;">
   
       <div class="w-100 mt-4 p-4 shadow rounded bg-white bg-opacity-75" style="max-width: 500px;">
           <h2 class="text-center fw-bold mb-4">Login to your account</h2>
   
           @if (session('status'))
               <div class="alert alert-success">
                   {{ session('status') }}
               </div>
           @endif
   
           <form method="POST" action="{{ route('login') }}">
               @csrf
               <!-- Email -->
               <div class="mb-3">
                   <label for="email" class="form-label fw-bold">Email address</label>
                   <input type="email" name="email" id="email" class="form-control" required autofocus value="{{ old('email') }}">
                   @error('email')
                       <div class="text-danger small">{{ $message }}</div>
                   @enderror
               </div>
               <!-- Password -->
               <div class="mb-3">
                   <label for="password" class="form-label fw-bold">Password</label>
                   <input type="password" name="password" id="password" class="form-control" required>
                   @error('password')
                       <div class="text-danger small">{{ $message }}</div>
                   @enderror
               </div>
               <!-- Remember Me + Forgot Password -->
               <div class="d-flex justify-content-between align-items-center mb-3">
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="remember" id="remember">
                       <label class="form-check-label" for="remember">
                           Remember me
                       </label>
                   </div>
                   @if (Route::has('password.request'))
                       <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot password?</a>
                   @endif
               </div>
               <!-- Submit Button -->
               <div class="d-grid mb-3">
                   <button type="submit" class="btn btn-primary">Login</button>
               </div>
               <!-- Social Logins -->
               <div class="text-center">
                   <p></p>
                   <div>
                       <a href="https://www.facebook.com/zohaib.allam" target="_blank" class="btn btn-link btn-floating mx-1">
                           <i class="fab fa-facebook-f"></i>
                       </a>
                       <a href="https://www.instagram.com/zohaib.a/" target="_blank" class="btn btn-link btn-floating mx-1">
                           <i class="fab fa-instagram"></i>
                       </a>
                       <a href="https://www.tiktok.com/@yourusername" target="_blank" class="btn btn-link btn-floating mx-1">
                           <i class="fab fa-tiktok"></i>
                       </a>
                       <a href="https://www.snapchat.com/add/yourusername" target="_blank" class="btn btn-link btn-floating mx-1">
                           <i class="fab fa-snapchat-ghost"></i>
                       </a>
                       <a href="https://www.youtube.com/@yourchannel" target="_blank" class="btn btn-link btn-floating mx-1">
                           <i class="fab fa-youtube"></i>
                       </a>
                   </div>                        
               </div>
           </form>
       </div>
   </div>
   
    </body>
</html>