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
    <h2 class="text-2xl font-bold text-amber-900 mb-6">Leave Management</h2>
        <!-- Submit -->
        <div class="col-span-5 flex justify-end mt-4 mb-4 md:mt-0">
            <a href="addLeave" class="bg-amber-500 text-white px-6 py-2 rounded hover:bg-amber-600 transition">
                Add Leave
            </a>
        </div>



    <!-- Orders Table -->
    <div class="bg-white p-4 rounded shadow" x-data="{ selected: null }">
        <h3 class="text-lg font-semibold mb-4 text-amber-900">Leave List</h3>
            <table class="min-w-full border border-gray-200 text-sm">
                <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="px-4 py-2 border">Employee ID</th>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Start Date</th>
                    <th class="px-4 py-2 border">End Date</th>
                    <th class="px-4 py-2 border">Designation</th>
                    <th class="px-4 py-2 border">Reason</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- Sample Row -->
                <tr class="text-center">
                    <td class="px-4 py-2 w-40 border">
                        <a href="/employeeProfile" class="text-black hover:text-amber-900 hover:underline transition">
                        EMP001
                        </a>
                    </td>
                    <td class="px-4 py-2 w-40 border">
                        <a href="/employeeProfile" class="text-black hover:text-amber-900 hover:underline transition">
                        Dulana Nuwanjith Polgampala
                        </a>
                    </td>
                    <td class="px-4 py-2 w-40 border">2025-04-02</td>
                    <td class="px-4 py-2 w-40 border">2025-04-04</td>
                    <td class="px-4 py-2 w-40 border">Machine Operator</td>
                    <td class="px-4 py-2 w-40 border">Sick</td>

                    <!-- End Employment Button -->
                    <td class="px-4 py-2 w-40 border">
                        <button class="bg-red-500 text-white text-sm px-3 py-1 rounded hover:bg-red-600 transition">
                        Cancel Leave
                        </button>
                    </td>
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


