<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Rangiri</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-amber-500 to-white">
  <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-2xl overflow-hidden flex">
      <!-- Left Panel -->
      <div class="w-1/2 bg-gradient-to-br from-amber-500 to-amber-300 text-white flex flex-col justify-center items-center p-8">
      <div class="flex justify-center items-center rounded-lg mt 6 h-40 mb-32">
      <img src="{{ asset('images/mainLogo.png') }}" alt="Logo" class="w-48 object-contain" />
    </div>
        <p class="text-sm text-center px-4 text-amber-900 ">
        Our vision is to be the leading Sri Lankan holding company, securing its interests as a preferred partner for institutional investors in the private and public sectors, as well as multinational corporations, to standardize the efficacy and profitability of the businesses in which Rangiri Holdings has a stake
        </p>
      </div>

      <!-- Right Panel -->
      <div class="w-1/2 p-8 flex flex-col justify-center">
        <h2 class="text-2xl font-bold text-amber-600 mb-2">Welcome</h2>
        <p class="text-sm text-gray-600 mb-6">Login in to your account to continue</p>

        <form>
          <input type="email" placeholder="Username" class="w-full mb-4 px-4 py-2 rounded-full bg-green-100 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-amber-400"/>
          <div class="relative mb-2">
            <input id="password" type="password" placeholder="Password"
                class="w-full px-4 py-2 pr-10 rounded-full bg-green-100 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-amber-400" />
            <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600 hover:text-amber-600">
                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.955 9.955 0 012.188-3.368M6.72 6.72A9.964 9.964 0 0112 5c4.477 0 8.267 2.943 9.541 7a9.966 9.966 0 01-4.292 5.222M15 12a3 3 0 00-4.243-2.828M9.878 9.878a3 3 0 004.243 4.243M3 3l18 18" />
                </svg>
            </button>
            </div>


          <div class="text-right text-sm mb-4">
            <a href="#" class="text-gray-500 hover:text-amber-500">forgot your password? Contact Admin</a>
          </div>

          <button type="submit" class="w-full bg-amber-600 text-white py-2 rounded-full hover:bg-amber-700 transition">LOG IN</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


<script>
  function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
      `;
    } else {
      passwordInput.type = 'password';
      eyeIcon.innerHTML = `
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.955 9.955 0 012.188-3.368M6.72 6.72A9.964 9.964 0 0112 5c4.477 0 8.267 2.943 9.541 7a9.966 9.966 0 01-4.292 5.222M15 12a3 3 0 00-4.243-2.828M9.878 9.878a3 3 0 004.243 4.243M3 3l18 18" />
      `;
    }
  }
</script>
