<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  @include('components.sidebar')

  <!-- Main Content -->
  <main class="flex-1 flex items-center justify-center p-8">
    <form class="bg-white shadow rounded-lg p-8 max-w-lg w-full">
      <h2 class="text-3xl font-semibold text-amber-900 mb-6 text-center">Create New User</h2>

      <!-- User Name -->
      <div class="mb-6">
        <label for="username" class="block mb-2 font-semibold text-gray-700">User Name</label>
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Enter user name"
          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500"
          required
        />
      </div>

      <!-- Password -->
      <div class="mb-6 relative">
        <label for="password" class="block mb-2 font-semibold text-gray-700">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter password"
          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 pr-10"
          required
        />
        <button type="button"
                id="togglePassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-amber-600"
                aria-label="Toggle Password Visibility">
          <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
        </button>
      </div>

      <!-- Confirm Password -->
      <div class="mb-6 relative">
        <label for="password_confirmation" class="block mb-2 font-semibold text-gray-700">Confirm Password</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          placeholder="Confirm password"
          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 pr-10"
          required
        />
        <button type="button"
                id="togglePasswordConfirmation"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 hover:text-amber-600"
                aria-label="Toggle Password Confirmation Visibility">
          <svg id="eyeIconConfirmation" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
        </button>
      </div>

      <!-- Role -->
      <div class="mb-6">
        <label for="role" class="block mb-2 font-semibold text-gray-700">Role</label>
        <select
          id="role"
          name="role"
          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500"
          required
        >
          <option value="" disabled selected>Select a role</option>
          <option value="Admin">Admin</option>
          <option value="HR">HR</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-center">
        <button
          type="submit"
          class="bg-amber-600 text-white font-semibold rounded px-6 py-3 hover:bg-amber-700 transition-colors"
        >
          Register User
        </button>
      </div>
    </form>
  </main>

  <script>
    // Password toggle for main password
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');
    const eyeIcon = document.querySelector('#eyeIcon');

    togglePassword.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      if(type === 'text') {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.957 9.957 0 012.647-4.435m1.75-1.75A9.957 9.957 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.402 3.25M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
        `;
      } else {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
      }
    });

    // Password toggle for confirm password
    const togglePasswordConfirmation = document.querySelector('#togglePasswordConfirmation');
    const passwordConfirmationInput = document.querySelector('#password_confirmation');
    const eyeIconConfirmation = document.querySelector('#eyeIconConfirmation');

    togglePasswordConfirmation.addEventListener('click', () => {
      const type = passwordConfirmationInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordConfirmationInput.setAttribute('type', type);

      if(type === 'text') {
        eyeIconConfirmation.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.957 9.957 0 012.647-4.435m1.75-1.75A9.957 9.957 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.402 3.25M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
        `;
      } else {
        eyeIconConfirmation.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
      }
    });
  </script>

</body>
</html>
