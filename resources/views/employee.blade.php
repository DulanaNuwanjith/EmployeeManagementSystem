<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Order Creation</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

<!-- Sidebar -->
@include('components.sidebar')

<!-- Main content -->
<div class="flex-1 p-8">
<h2 class="text-2xl font-bold text-amber-900 mb-6">Employee Management</h2>
    <!-- Submit -->
    <div class="col-span-5 flex justify-end mt-4 mb-4 md:mt-0">
        <a href="{{ url('addEmployee') }}" class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition">
            Add Employee
        </a>
    </div>



<!-- Orders Table -->
<div class="bg-white p-4 rounded shadow" x-data="{ selected: null }">
    <h3 class="text-lg font-semibold mb-4 text-amber-900">Employee List</h3>
        <table class="min-w-full border border-gray-200 text-sm">
            <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="px-4 py-2 border">Employee ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Contact Number</th>
                <th class="px-4 py-2 border">Address</th>
                <th class="px-4 py-2 border">Designation</th>
                <th class="px-4 py-2 border">Employment Start Date</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Sample Row -->
            <tr class="text-center">
                <td class="px-4 py-2 w-40 border">
                    <a href="{{ url('employeeProfile') }}" class="text-black hover:text-amber-900 hover:underline transition">
                    EMP001
                    </a>
                </td>
                <td class="px-4 py-2 w-40 border">
                    <a href="{{ url('employeeProfile') }}" class="text-black hover:text-amber-900 hover:underline transition">
                    Dulana Nuwanjith Polgampala
                    </a>
                </td>
                <td class="px-4 py-2 w-40 border">0777137830</td>
                <td class="px-4 py-2 border w-[100px] break-words whitespace-normal">
                    'Vijayanthi', Pilankada, Uduthuththiripitiya
                </td>
                <td class="px-4 py-2 w-40 border">Machine Operator</td>
                <td class="px-4 py-2 w-40 border">2025-01-01</td>

                <!-- End Employment Button -->
                <td class="px-4 py-2 w-40 border">
                    <button
                        class="bg-red-500 text-white text-sm px-3 py-1 rounded hover:bg-red-600 transition"
                        onclick="openModal('Are you sure you want to end this employment?', handleEndEmployment)"
                    >
                        End Employment
                    </button>
                </td>
                <!-- Reusable Confirmation Modal -->
                <div id="confirmModal" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg p-6 w-96 shadow-lg">
                        <h2 class="text-lg font-semibold mb-4">Confirmation</h2>
                        <p id="modalMessage" class="mb-6">Are you sure?</p>
                        <div class="flex justify-end gap-3">
                        <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">No</button>
                        <button id="confirmBtn" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Yes, Confirm</button>
                        </div>
                    </div>
                </div>


            </tr>


            <!-- More rows -->
            </tbody>
        </table>
    </div>

<!-- Bottom Blue Layer -->
    <div class="w-full h-[5px] bg-amber-900"></div>


</div>

</body>
</html>


<script>
let confirmAction = null;

function openModal(message, action) {
const modal = document.getElementById('confirmModal');
const messageElement = document.getElementById('modalMessage');
const confirmBtn = document.getElementById('confirmBtn');

// Set message
messageElement.textContent = message;

// Set action
confirmAction = action;
confirmBtn.onclick = function () {
    if (confirmAction) confirmAction();
    closeModal();
};

// Show modal
modal.classList.remove('hidden');
modal.classList.add('flex');
}

function closeModal() {
const modal = document.getElementById('confirmModal');
modal.classList.remove('flex');
modal.classList.add('hidden');
}

// Your actual action function
function cancelLeave() {
alert('Leave cancelled!'); // Replace with actual cancellation logic
}

function handleEndEmployment() {
alert('Employment ended!'); // Replace with real logic
}
</script>
