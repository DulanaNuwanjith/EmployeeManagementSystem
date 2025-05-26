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
        <img src="{{ asset('icons/employee.png') }}" alt="Profile Photo" class="w-48 h-48 object-cover rounded shadow" />
        <h2 class="text-2xl font-bold text-amber-900">Dulana Nuwanjith Polgampala</h2>
    </div>

    <!-- Information Fields -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Full Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Full Name</label>
            <template x-if="editing">
                <input type="text" value="Dulana Nuwanjith Polgampala" class="mt-1 p-2 border rounded w-full" />
            </template>
            <template x-if="!editing">
                <div class="mt-1 p-2 border rounded bg-gray-50">Dulana Nuwanjith Polgampala</div>
            </template>
        </div>

        <!-- Name with Initials -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Name with Initials</label>
                <template x-if="editing">
                    <input type="text" value="D. N. Polgampala" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">D. N. Polgampala</div>
                </template>
            </div>

            <!-- Residential Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Residential Address</label>
                <template x-if="editing">
                    <input type="text" value="'Vijayanthi', Pilankada, Uduthuththiripitiya" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">'Vijayanthi', Pilankada, Uduthuththiripitiya</div>
                </template>
            </div>

            <!-- Permanent Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Permanent Address</label>
                <template x-if="editing">
                    <input type="text" value="'Vijayanthi', Pilankada, Uduthuththiripitiya" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">'Vijayanthi', Pilankada, Uduthuththiripitiya</div>
                </template>
            </div>

            <!-- Date of Birth -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <template x-if="editing">
                    <input type="date" value="1999-04-15" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">1999-04-15</div>
                </template>
            </div>

            <!-- Age -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Age</label>
                <template x-if="editing">
                    <input type="number" value="26" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">26</div>
                </template>
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm mb-1 font-medium text-gray-700">Gender</label>
                <template x-if="editing">
                    <div class="relative inline-block text-left w-full">
                        <input type="hidden" id="genderInput" name="gender" value="Male" />
                        <button
                            type="button"
                            id="genderDropdown"
                            class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
                            onclick="toggleGenderDropdown()"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                        >
                            <span id="selectedGender">Male</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <ul
                            id="genderDropdownMenu"
                            class="absolute z-10 mt-1 w-full rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                            role="listbox"
                        >
                            <li class="cursor-pointer px-4 py-2 hover:bg-gray-100" role="option" onclick="selectGender('Male')">Male</li>
                            <li class="cursor-pointer px-4 py-2 hover:bg-gray-100" role="option" onclick="selectGender('Female')">Female</li>
                            <li class="cursor-pointer px-4 py-2 hover:bg-gray-100" role="option" onclick="selectGender('Other')">Other</li>
                        </ul>
                    </div>
                </template>

                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">Male</div>
                </template>
            </div>

            <!-- Civil Status -->
            <div>
            <label class="block text-sm mb-1 font-medium text-gray-700">Civil Status</label>
            <template x-if="editing">
                <div class="relative inline-block text-left w-full">
                <input type="hidden" id="civilStatusInput" name="civilStatus" value="Single" />
                <button
                    type="button"
                    id="civilStatusDropdown"
                    class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
                    onclick="toggleCivilStatusDropdown()"
                    aria-haspopup="listbox"
                    aria-expanded="false"
                >
                    <span id="selectedCivilStatus">Single</span>
                    <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
                    </svg>
                </button>

                <ul
                    id="civilStatusDropdownMenu"
                    class="absolute z-10 mt-1 w-full rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                    role="listbox"
                >
                    <li class="cursor-pointer px-4 py-2 hover:bg-gray-100" role="option" onclick="selectCivilStatus('Single')">Single</li>
                    <li class="cursor-pointer px-4 py-2 hover:bg-gray-100" role="option" onclick="selectCivilStatus('Married')">Married</li>
                </ul>
                </div>
            </template>

            <template x-if="!editing">
                <div class="mt-1 p-2 border rounded bg-gray-50">Single</div>
            </template>
            </div>


            <!-- Religion -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Religion</label>
                <template x-if="editing">
                    <input type="text" value="Buddhism" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">Buddhism</div>
                </template>
            </div>

            <!-- NIC -->
            <div>
                <label class="block text-sm font-medium text-gray-700">National Identity Card No</label>
                <template x-if="editing">
                    <input type="text" value="993451234V" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">993451234V</div>
                </template>
            </div>

            <!-- Driving License -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Driving Licence No</label>
                <template x-if="editing">
                    <input type="text" value="B1234567" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">B1234567</div>
                </template>
            </div>

            <!-- Mobile Number -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Mobile Number</label>
                <template x-if="editing">
                    <input type="text" value="0777137830" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">0777137830</div>
                </template>
            </div>

            <!-- Fixed Line Number -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Fixed Line Number</label>
                <template x-if="editing">
                    <input type="text" value="0112345678" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">0112345678</div>
                </template>
            </div>

            <!-- Designation -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Designation</label>
                <template x-if="editing">
                    <input type="text" value="Machine Operator" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">Machine Operator</div>
                </template>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                <template x-if="editing">
                    <input type="email" value="dulana@example.com" class="mt-1 p-2 border rounded w-full" />
                </template>
                <template x-if="!editing">
                    <div class="mt-1 p-2 border rounded bg-gray-50">dulana@example.com</div>
                </template>
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
    <template x-if="!editing">
    <table class="w-full table-auto border border-gray-300 text-sm">
        <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">Subject</th>
            <th class="border px-4 py-2">Grade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Combined Maths</td>
            <td class="border px-4 py-2">A</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Physics</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Chemistry</td>
            <td class="border px-4 py-2">C</td>
        </tr><tr>
            <td class="border px-4 py-2">General English</td>
            <td class="border px-4 py-2">C</td>
        </tr>
        </tbody>
    </table>
    </template>
    <template x-if="editing">
    <div class="grid grid-cols-2 gap-4">
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 1</label>
        <input type="text" value="Combined Maths" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 1</label>
        <input type="text" value="A" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 2</label>
        <input type="text" value="Physics" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 2</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 3</label>
        <input type="text" value="Chemistry" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 3</label>
        <input type="text" value="C" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 4</label>
        <input type="text" value="General English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 4</label>
        <input type="text" value="C" class="mt-1 p-2 border rounded w-full" />
        </div>

    </div>
    </template>
</div>

<!-- O/L Results -->
<div class="mb-6">
    <h4 class="text-lg font-medium text-gray-700 mb-2">Ordinary Level Results</h4>
    <template x-if="!editing">
    <table class="w-full table-auto border border-gray-300 text-sm">
        <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">Subject</th>
            <th class="border px-4 py-2">Grade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Mathematics</td>
            <td class="border px-4 py-2">A</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Science</td>
            <td class="border px-4 py-2">A</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">English</td>
            <td class="border px-4 py-2">B</td>
        </tr>
        </tbody>
    </table>
    </template>
    <template x-if="editing">
    <div class="grid grid-cols-2 gap-4">
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 1</label>
        <input type="text" value="Mathematics" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 1</label>
        <input type="text" value="A" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 2</label>
        <input type="text" value="Science" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 2</label>
        <input type="text" value="A" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 3</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 3</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 4</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 4</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 5</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 5</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 6</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 6</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 7</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 7</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 8</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 8</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Subject 9</label>
        <input type="text" value="English" class="mt-1 p-2 border rounded w-full" />
        </div>
        <div>
        <label class="block text-sm font-medium text-gray-700">Grade 9</label>
        <input type="text" value="B" class="mt-1 p-2 border rounded w-full" />
        </div>
    </div>
    </template>
</div>

<!-- Higher Education -->
<div>
    <h4 class="text-lg font-medium text-gray-700 mb-2">Higher Education</h4>
    <template x-if="editing">
    <textarea rows="4" class="w-full p-2 border rounded" placeholder="e.g., BSc in Computer Science - University of Colombo">BSc in Computer Science - University of Colombo</textarea>
    </template>
    <template x-if="!editing">
    <div class="mt-1 p-2 border rounded bg-gray-50">BSc in Computer Science - University of Colombo</div>
    </template>
</div>
</div>
</div>
<div class="bg-white p-6 mt-6 rounded shadow">
    <h2 class="text-xl font-semibold text-amber-900 mb-4">Service Experience</h2>
    <div class="overflow-x-auto">
        <template x-if="!editing">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Organization</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Address</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Designation</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Time Duration</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Example row -->
                    <tr>
                        <td class="px-4 py-2 text-gray-800">ABC Corp</td>
                        <td class="px-4 py-2 text-gray-800">Colombo, Sri Lanka</td>
                        <td class="px-4 py-2 text-gray-800">Software Engineer Intern</td>
                        <td class="px-4 py-2 text-gray-800">Jan 2024 – Jun 2024</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </template>
        <template x-if="editing">
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Organization</label>
                    <input type="text" value="ABC Corp" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" value="Colombo, Sri Lanka" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Designation</label>
                    <input type="text" value="Software Engineer Intern" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Time Duration</label>
                    <input type="text" value="Jan 2024 – Jun 2024" class="mt-1 p-2 border rounded w-full" />
                </div>
            </div>
        </template>
    </div>
</div>

<div class="bg-white p-6 mt-6 rounded shadow">
<h2 class="text-xl text-amber-900 font-semibold mb-4">Family Details</h2>
    <div class="overflow-x-auto">
        <template x-if="!editing">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Name</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Relationship</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Contact Number</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Occupation</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Address</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Example row -->
                    <tr>
                        <td class="px-4 py-2 text-gray-800">Dushantha Polgampala</td>
                        <td class="px-4 py-2 text-gray-800">Farther</td>
                        <td class="px-4 py-2 text-gray-800">0711537179</td>
                        <td class="px-4 py-2 text-gray-800">Engineer</td>
                        <td class="px-4 py-2 text-gray-800">'Vijayanthi', Pilankada, Uduthuththiripitiya</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </template>
        <template x-if="editing">
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" value="Dushantha Polgampala" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Relationship</label>
                    <input type="text" value="Farther" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="text" value="0711537179" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Occupation</label>
                    <input type="text" value="Engineer" class="mt-1 p-2 border rounded w-full" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" value="Engineer" class="mt-1 p-2 border rounded w-full" />
                </div>
            </div>
        </template>
    </div>
</div>

</div>
</div>
</body>
</html>

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

// Close dropdown on outside click
document.addEventListener('click', function (e) {
const civilBtn = document.getElementById('civilStatusDropdown');
const civilMenu = document.getElementById('civilStatusDropdownMenu');
if (!civilBtn.contains(e.target) && !civilMenu.contains(e.target)) {
civilMenu.classList.add('hidden');
civilBtn.setAttribute('aria-expanded', false);
}
});
</script>
