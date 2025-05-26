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

    <div class="md:col-span-2">
    <label class="block font-medium text-gray-700 mb-1">Select Employee</label>
    <select name="employee" class="w-full p-2 border rounded" required>
        <option value="" disabled selected>Select an employee</option>
        <option value="EMP001">EMP001 - Dulana Polgampala</option>
        <option value="EMP002">EMP002 - Nimesha Perera</option>
        <option value="EMP003">EMP003 - Kavindu Silva</option>
    </select>
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
