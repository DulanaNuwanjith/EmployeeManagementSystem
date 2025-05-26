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

      <!-- Role -->
      <div class="relative inline-block w-full text-left col-span-1 mb-6 ">
        <label for="roleDropdown" class="block text-sm text-gray-600 mb-1 font-semibold">Role</label>
        <div>
            <button
            type="button"
            id="roleDropdown"
            class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
            onclick="toggleRoleDropdown()"
            aria-haspopup="listbox"
            aria-expanded="false"
            >
            <span id="selectedRole">Select a role</span>
            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
            </svg>
            </button>
        </div>

        <div id="roleDropdownMenu" class="hidden absolute z-10 mt-2 w-full rounded-md bg-white shadow-lg ring-1 ring-black/5">
            <div class="py-1" role="listbox" tabindex="-1" aria-labelledby="roleDropdown">
            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectRole('Admin')">Admin</button>
            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectRole('HR')">HR</button>
            </div>
        </div>

        <input type="hidden" name="role" id="roleInput" required>

        <!-- Optionally, error message for validation -->
        {{-- @error('role') --}}
        {{-- <p class="text-sm text-red-500 mt-1">{{ $message }}</p> --}}
        {{-- @enderror --}}
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


<script>
  function toggleRoleDropdown() {
    const menu = document.getElementById('roleDropdownMenu');
    menu.classList.toggle('hidden');

    const btn = document.getElementById('roleDropdown');
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', !expanded);
  }

  function selectRole(role) {
    document.getElementById('selectedRole').innerText = role;
    document.getElementById('roleInput').value = role;
    document.getElementById('roleDropdownMenu').classList.add('hidden');
    document.getElementById('roleDropdown').setAttribute('aria-expanded', false);
  }

  // Close dropdown if click outside
  document.addEventListener('click', function (e) {
    const roleBtn = document.getElementById('roleDropdown');
    const roleMenu = document.getElementById('roleDropdownMenu');
    if (!roleBtn.contains(e.target) && !roleMenu.contains(e.target)) {
      roleMenu.classList.add('hidden');
      roleBtn.setAttribute('aria-expanded', false);
    }
  });
</script>
