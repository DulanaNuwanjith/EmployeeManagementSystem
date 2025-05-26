<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emp Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 h-screen">
<div class="flex h-full">

  <!-- Sidebar -->
  @include('components.sidebar')

  <!-- Main Content -->
    <div class="flex-1 overflow-y-auto p-8" x-data="{ editing: false }">
        <div class="bg-white p-6 rounded shadow">
        <!-- Buttons -->
            <div class="flex justify-end space-x-4 mb-6">
                <button
                type="button"
                @click="editing = !editing"
                class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition"
                >
                <span x-text="editing ? 'Cancel' : 'Edit Employee Details'"></span>
                </button>
                <button
                type="submit"
                x-show="editing"
                class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition"
                >
                Save
                </button>
            </div>

            <!-- Profile Image and Name -->
            <div class="flex items-center space-x-6 mb-8">
                <!-- Uploadable Profile Photo Input -->
                <label class="w-48 h-48 border border-gray-300 rounded shadow flex items-center justify-center cursor-pointer">
                    <input
                        type="file"
                        accept="image/*"
                        class="hidden"
                    />
                    <span class="text-gray-500">Choose file</span>
                </label>


                <!-- Name -->
                <h2 class="text-2xl font-bold text-amber-900">Dulana Nuwanjith Polgampala</h2>
            </div>


            <!-- Information Fields using Flex -->
            <div class="flex flex-wrap gap-6">

                <!-- Full Name -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" value="" placeholder="Enter full name" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Name with Initials -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Name with Initials</label>
                <input type="text" value="" placeholder="Enter name with initials" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Date of Birth -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" value="" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Age -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" value="" placeholder="Enter age" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Gender -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <select class="mt-1 p-2 border rounded w-full">
                    <option value="" disabled selected>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                </div>

                <!-- Civil Status -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Civil Status</label>
                <select class="mt-1 p-2 border rounded w-full">
                    <option value="" disabled selected>Select civil status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
                </div>

                <!-- NIC -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">NIC</label>
                <input type="text" value="" placeholder="Enter NIC" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Address -->
                <div class="w-full">
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <textarea placeholder="Enter address" class="mt-1 p-2 border rounded w-full"></textarea>
                </div>

                <!-- Contact Number -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input type="text" value="" placeholder="Enter contact number" class="mt-1 p-2 border rounded w-full" />
                </div>

                <!-- Email -->
                <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" value="" placeholder="Enter email" class="mt-1 p-2 border rounded w-full" />
                </div>

            </div>
        </div>

        <div class="bg-white p-6 mt-6 rounded shadow">
        <!-- Education Section -->
        <div class="mt-4">
        <h3 class="text-xl font-semibold text-amber-900 mb-4">Education</h3>

        <!-- A/L Results -->
        <div class="mb-6">
            <h4 class="text-lg font-medium text-gray-700 mb-2">Advanced Level Results</h4>

            <div class="grid grid-cols-2 gap-4">
                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 1</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 1</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 2</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 2</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 3</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 3</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 4</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 4</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>
            </div>
        </div>


        <!-- O/L Results -->
        <div class="mb-6">
            <h4 class="text-lg font-medium text-gray-700 mb-2">Ordinary Level Results</h4>

            <div class="grid grid-cols-2 gap-4">
                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 1</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 1</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 2</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 2</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 3</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 3</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 4</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 4</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 5</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 5</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 6</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 6</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 7</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 7</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 8</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 8</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>

                <div>
                <label class="block text-sm font-medium text-gray-700">Subject 9</label>
                <input type="text" value="" placeholder="Enter subject" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                <label class="block text-sm font-medium text-gray-700">Grade 9</label>
                <input type="text" value="" placeholder="Enter grade" class="mt-1 p-2 border rounded w-full" />
                </div>
            </div>
        </div>


        <!-- Higher Education -->
        <div>
            <h4 class="text-lg font-medium text-gray-700 mb-2">Higher Education</h4>
            <textarea rows="4" class="w-full p-2 border rounded" placeholder="Enter Higher Educational Qlifications (Post-Graduate/Degree)"></textarea>
        </div>

        </div>
    </div>
        <div class="bg-white p-6 mt-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Service Experience</h2>
            <div id="service-experience-container" class="space-y-6">
                <div class="service-experience-entry border p-4 rounded relative">
                <h3 class="text-lg font-semibold mb-4 service-number">Service Experience 1</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                    <label class="block text-sm font-medium text-gray-700">Organization</label>
                    <input type="text" placeholder="Enter organization" class="mt-1 p-2 border rounded w-full" />
                    </div>
                    <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" placeholder="Enter address" class="mt-1 p-2 border rounded w-full" />
                    </div>
                    <div>
                    <label class="block text-sm font-medium text-gray-700">Designation</label>
                    <input type="text" placeholder="Enter designation" class="mt-1 p-2 border rounded w-full" />
                    </div>
                    <div>
                    <label class="block text-sm font-medium text-gray-700">Time Duration</label>
                    <input type="text" placeholder="Enter time duration" class="mt-1 p-2 border rounded w-full" />
                    </div>
                </div>
                </div>
            </div>
            <button
                id="add-service-btn"
                class="mt-4 px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition"
            >
                + Add Service Experience
            </button>
        </div>


        <div class="bg-white p-6 mt-6 rounded shadow">
  <h2 class="text-xl font-semibold mb-4">Family Details</h2>

  <div id="family-details-container" class="space-y-6">
    <div class="family-member-entry border p-4 rounded">
      <h3 class="text-lg font-semibold mb-4 family-number">Family Member 1</h3>
      <div class="grid grid-cols-2 gap-4 text-sm">
        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" value="" placeholder="Enter name" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Relationship</label>
          <input type="text" value="" placeholder="Enter relationship" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Contact Number</label>
          <input type="text" value="" placeholder="Enter contact number" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Occupation</label>
          <input type="text" value="" placeholder="Enter occupation" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">Address</label>
          <input type="text" value="" placeholder="Enter address" class="mt-1 p-2 border rounded w-full" />
        </div>
      </div>
    </div>
  </div>

  <button
    id="add-family-member-btn"
    class="mt-4 px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition"
  >
    + Add Family Member
  </button>
</div>
</div>
</body>
</html>

<script>
  function updateNumbering() {
    const entries = document.querySelectorAll('.service-experience-entry');
    entries.forEach((entry, index) => {
      const numberHeading = entry.querySelector('.service-number');
      numberHeading.textContent = `Service Experience ${index + 1}`;
    });
  }

  document.getElementById('add-service-btn').addEventListener('click', function () {
    const container = document.getElementById('service-experience-container');
    const newEntry = container.querySelector('.service-experience-entry').cloneNode(true);

    // Clear all input values in the cloned entry
    newEntry.querySelectorAll('input').forEach(input => input.value = '');

    container.appendChild(newEntry);
    updateNumbering();
  });

  // Initial numbering
  updateNumbering();
</script>

<script>
  function updateFamilyNumbering() {
    const entries = document.querySelectorAll('.family-member-entry');
    entries.forEach((entry, index) => {
      const numberHeading = entry.querySelector('.family-number');
      numberHeading.textContent = `Family Member ${index + 1}`;
    });
  }

  document.getElementById('add-family-member-btn').addEventListener('click', () => {
    const container = document.getElementById('family-details-container');
    const newEntry = container.querySelector('.family-member-entry').cloneNode(true);

    // Clear input values for new entry
    newEntry.querySelectorAll('input').forEach(input => input.value = '');

    container.appendChild(newEntry);
    updateFamilyNumbering();
  });

  // Initialize numbering
  updateFamilyNumbering();
</script>
