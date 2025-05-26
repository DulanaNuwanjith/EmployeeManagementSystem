@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="text-2xl text-amber-900 font-semibold mb-4">Dashboard</h1>

<!-- Dashboard Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-800">Total Employees</h2>
    <p class="text-3xl font-bold text-blue-600 mt-2">50</p>
  </div>

  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-800">Employees on Leave</h2>
    <p class="text-3xl font-bold text-yellow-500 mt-2">7</p>
  </div>

  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-800">Departments</h2>
    <p class="text-3xl font-bold text-green-600 mt-2">7</p>
  </div>

  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-800">Pending Leave Requests</h2>
    <p class="text-3xl font-bold text-red-500 mt-2">3</p>
  </div>
</div>

<!-- Department-wise Bar Chart -->
<h2 class="text-xl text-amber-900 font-semibold mb-8">Employee Distribution by Department</h2>
<div class="flex justify-center">
  <div class="bg-white p-4 rounded shadow" style="width: 700px; height: 400px;">
    <canvas id="employeeChart" width="700" height="400"></canvas>
  </div>
</div>
@endsection

@section('scripts')
<!-- Include Chart.js from CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('employeeChart').getContext('2d');

  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'HR (8 total / 2 leave)',
        'IT (12 total / 3 leave)',
        'Finance (6 total / 1 leave)',
        'Marketing (5 total / 0 leave)',
        'Operations (7 total / 1 leave)',
        'Sales (8 total / 0 leave)',
        'Support (4 total / 0 leave)'
      ],
      datasets: [
        {
          label: 'Total Employees',
          data: [8, 12, 6, 5, 7, 8, 4],
          backgroundColor: '#60A5FA'
        },
        {
          label: 'Employees on Leave',
          data: [2, 3, 1, 0, 1, 0, 0],
          backgroundColor: '#FBBF24'
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Number of Employees'
          },
          ticks: {
            stepSize: 1
          }
        }
      },
      plugins: {
        legend: {
          position: 'top'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return `${context.dataset.label}: ${context.parsed.y} Employees`;
            }
          }
        }
      }
    }
  });
</script>
@endsection
