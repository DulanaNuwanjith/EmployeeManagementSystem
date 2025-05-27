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
            <!-- Submit -->
            <div class="col-span-5 flex justify-end mt-4 mb-4 md:mt-0">
                <a href="addEmployee" class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition">
                    Create Employee
                </a>
            </div>

            <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
                <!-- Profile Image and Name -->
                <div class="flex items-center space-x-6 mb-8">
                    <!-- Uploadable Profile Photo Input -->
                    <label class="w-48 h-48 border border-gray-300 rounded shadow flex items-center justify-center cursor-pointer">
                            <input
                                type="file"
                                accept="image/*"
                                class="hidden"
                                name="profile_photo"
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
                            <input type="text" name="full_name" placeholder="Enter full name" class="mt-1 p-2 border rounded w-full" />
                        </div>

                        <!-- Name with Initials -->
                        <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">Name with Initials</label>
                        <input type="text" name="initials_name" placeholder="Enter name with initials" class="mt-1 p-2 border rounded w-full" />
                        </div>

                        <!-- Date of Birth -->
                        <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" name="dob" class="mt-1 p-2 border rounded w-full" />
                        </div>

                        <!-- Age -->
                        <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">Age</label>
                        <input type="number" name="age" placeholder="Enter age" class="mt-1 p-2 border rounded w-full" />
                        </div>

                        <!-- Gender -->
                        <div class="relative inline-block  text-left flex-1 min-w-[300px]">
                        <label for="genderDropdown" class="block text-sm font-semibold text-gray-700 mb-1">Gender</label>
                        <div>
                            <button
                            type="button"
                            id="genderDropdown"
                            class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
                            onclick="toggleGenderDropdown()"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                            >
                            <span id="selectedGender">Select gender</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        </div>

                        <div id="genderDropdownMenu" class="hidden absolute z-10 mt-2 w-full rounded-md bg-white shadow-lg ring-1 ring-black/5">
                            <div class="py-1" role="listbox" tabindex="-1" aria-labelledby="genderDropdown">
                            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectGender('Male')">Male</button>
                            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectGender('Female')">Female</button>
                            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectGender('Other')">Other</button>
                            </div>
                        </div>

                        <input type="hidden" name="gender" id="genderInput" required>

                        {{-- @error('gender') --}}
                        {{-- <p class="text-sm text-red-500 mt-1">{{ $message }}</p> --}}
                        {{-- @enderror --}}
                        </div>

                    <!-- Civil Status -->
                    <div class="relative inline-block text-left flex-1 min-w-[300px]">
                        <label for="civilStatusDropdown" class="block text-sm font-semibold text-gray-700 mb-1">Civil Status</label>
                        <div>
                            <button
                            type="button"
                            id="civilStatusDropdown"
                            class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
                            onclick="toggleCivilStatusDropdown()"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                            >
                            <span id="selectedCivilStatus">Select civil status</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        </div>

                        <div id="civilStatusDropdownMenu" class="hidden absolute z-10 mt-2 w-full rounded-md bg-white shadow-lg ring-1 ring-black/5">
                            <div class="py-1" role="listbox" tabindex="-1" aria-labelledby="civilStatusDropdown">
                            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectCivilStatus('Single')">Single</button>
                            <button type="button" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectCivilStatus('Married')">Married</button>
                            </div>
                        </div>

                        <input type="hidden" name="civil_status" id="civilStatusInput" required>
                    </div>

                    <!-- Address -->
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea type="text" name="address" placeholder="Enter address" class="mt-1 p-2 border rounded w-full"></textarea>
                    </div>

                    <!-- NIC -->
                    <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">NIC</label>
                        <input type="text" name="nic" placeholder="Enter NIC" class="mt-1 p-2 border rounded w-full" />
                    </div>

                    <!-- Contact Number -->
                    <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                        <input type="text" name="contact_number" placeholder="Enter contact number" class="mt-1 p-2 border rounded w-full" />
                    </div>

                    <!-- Email -->
                    <div class="flex-1 min-w-[300px]">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" placeholder="Enter email" class="mt-1 p-2 border rounded w-full" />
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
                <h2 class="text-xl text-amber-900 font-semibold mb-4">Service Experience</h2>
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
            <h2 class="text-xl text-amber-900 font-semibold mb-4">Family Details</h2>

            <div id="family-details-container" class="space-y-6">
            <div class="family-member-entry border p-4 rounded">
            <h3 class="text-lg font-semibold mb-4 family-number">Family Member 1</h3>
            <div class="grid grid-cols-2 gap-4 text-sm">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="" placeholder="Enter name" class="mt-1 p-2 border rounded w-full" />
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

            </form>

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

<script>
function toggleGenderDropdown() {
const menu = document.getElementById('genderDropdownMenu');
menu.classList.toggle('hidden');

const btn = document.getElementById('genderDropdown');
const expanded = btn.getAttribute('aria-expanded') === 'true';
btn.setAttribute('aria-expanded', !expanded);
}

function selectGender(gender) {
document.getElementById('selectedGender').innerText = gender;
document.getElementById('genderInput').value = gender;
document.getElementById('genderDropdownMenu').classList.add('hidden');
document.getElementById('genderDropdown').setAttribute('aria-expanded', false);
}

// Close dropdown on outside click
document.addEventListener('click', function (e) {
const genderBtn = document.getElementById('genderDropdown');
const genderMenu = document.getElementById('genderDropdownMenu');
if (!genderBtn.contains(e.target) && !genderMenu.contains(e.target)) {
genderMenu.classList.add('hidden');
genderBtn.setAttribute('aria-expanded', false);
}
});
</script>

<script>
function toggleCivilStatusDropdown() {
const menu = document.getElementById('civilStatusDropdownMenu');
menu.classList.toggle('hidden');

const btn = document.getElementById('civilStatusDropdown');
const expanded = btn.getAttribute('aria-expanded') === 'true';
btn.setAttribute('aria-expanded', !expanded);
}

function selectCivilStatus(status) {
document.getElementById('selectedCivilStatus').innerText = status;
document.getElementById('civilStatusInput').value = status;
document.getElementById('civilStatusDropdownMenu').classList.add('hidden');
document.getElementById('civilStatusDropdown').setAttribute('aria-expanded', false);
}

// Optional: Add to your existing outside click handler
document.addEventListener('click', function (e) {
const statusBtn = document.getElementById('civilStatusDropdown');
const statusMenu = document.getElementById('civilStatusDropdownMenu');
if (!statusBtn.contains(e.target) && !statusMenu.contains(e.target)) {
statusMenu.classList.add('hidden');
statusBtn.setAttribute('aria-expanded', false);
}
});
</script>
