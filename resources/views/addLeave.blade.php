<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Add Leave</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

<!-- Sidebar -->
@include('components.sidebar')

<!-- Main content -->
<div class="flex-1 p-8">
<h2 class="text-2xl font-bold text-amber-900 mb-6">Add Leave</h2>

<!-- Back Button -->
<div class="mb-4">
    <a href="leave" class="text-amber-700 hover:underline">&larr; Back to Leave List</a>
</div>

<!-- Leave Form -->
<form action="/submitLeave" method="POST" class="bg-white p-6 rounded shadow grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
    @csrf

    <div class="md:col-span-2 relative inline-block w-full text-left mb-1">
        <label for="employeeDropdown" class="block mb-2 font-semibold text-gray-700">Select Employee</label>

        <button
            type="button"
            id="employeeDropdown"
            class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 h-10"
            onclick="toggleEmployeeDropdown()"
            aria-haspopup="listbox"
            aria-expanded="false"
        >
            <span id="selectedEmployee">Select an employee</span>
            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.25 8.29a.75.75 0 0 1-.02-1.08z" clip-rule="evenodd" />
            </svg>
        </button>

        <div id="employeeDropdownMenu" class="hidden absolute z-10 mt-2 w-full rounded-md bg-white shadow-lg ring-1 ring-black/5">
            <div class="p-2">
                <input type="text" id="employeeSearch" onkeyup="filterEmployees()" placeholder="Search..." class="w-full px-3 py-1 text-sm border rounded-md border-gray-300 focus:outline-none focus:ring-1 focus:ring-amber-500">
            </div>
            <div class="py-1 max-h-40 overflow-y-auto" role="listbox" tabindex="-1" aria-labelledby="employeeDropdown" id="employeeList">
                <button type="button" class="employee-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectEmployee('EMP001', 'Dulana Polgampala')">EMP001 - Dulana Polgampala</button>
                <button type="button" class="employee-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectEmployee('EMP002', 'Nimesha Perera')">EMP002 - Nimesha Perera</button>
                <button type="button" class="employee-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="selectEmployee('EMP003', 'Kavindu Silva')">EMP003 - Kavindu Silva</button>
            </div>
        </div>

        <input type="hidden" name="employee" id="employeeInput" required>
    </div>


    <div>
    <label class="block font-medium text-gray-700 mb-1">Start Date</label>
    <input type="date" name="start_date" class="w-full p-2 border rounded" required />
    </div>

    <div>
    <label class="block font-medium text-gray-700 mb-1">End Date</label>
    <input type="date" name="end_date" class="w-full p-2 border rounded" required />
    </div>

    <div>
    <label class="block font-medium text-gray-700 mb-1">Designation</label>
    <input type="text" name="designation" placeholder="e.g. Machine Operator" class="w-full p-2 border rounded" required />
    </div>

    <div>
    <label class="block font-medium text-gray-700 mb-1">Reason</label>
    <textarea name="reason" rows="3" placeholder="e.g. Sick leave, personal reason" class="w-full p-2 border rounded" required></textarea>
    </div>

    <!-- Submit Button -->
    <div class="md:col-span-2 flex justify-end mt-4">
    <button type="submit" class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition">
        Submit Leave
    </button>
    </div>
</form>

<!-- Bottom Accent -->
<div class="w-full h-[5px] bg-amber-900 mt-8"></div>
</div>

</body>
</html>


<script>
function toggleEmployeeDropdown() {
    const menu = document.getElementById('employeeDropdownMenu');
    menu.classList.toggle('hidden');

    const btn = document.getElementById('employeeDropdown');
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', !expanded);

    // Focus search input when dropdown is shown
    if (!menu.classList.contains('hidden')) {
        setTimeout(() => document.getElementById('employeeSearch').focus(), 50);
    }
}

function selectEmployee(empId, empName) {
    document.getElementById('selectedEmployee').innerText = `${empId} - ${empName}`;
    document.getElementById('employeeInput').value = empId;
    document.getElementById('employeeDropdownMenu').classList.add('hidden');
    document.getElementById('employeeDropdown').setAttribute('aria-expanded', false);
}

function filterEmployees() {
    const search = document.getElementById('employeeSearch').value.toLowerCase();
    const employees = document.querySelectorAll('#employeeList .employee-option');

    employees.forEach(emp => {
        const text = emp.textContent.toLowerCase();
        emp.style.display = text.includes(search) ? '' : 'none';
    });
}

// Close dropdown on outside click
document.addEventListener('click', function (e) {
    const empBtn = document.getElementById('employeeDropdown');
    const empMenu = document.getElementById('employeeDropdownMenu');
    if (!empBtn.contains(e.target) && !empMenu.contains(e.target)) {
        empMenu.classList.add('hidden');
        empBtn.setAttribute('aria-expanded', false);
    }
});
</script>
