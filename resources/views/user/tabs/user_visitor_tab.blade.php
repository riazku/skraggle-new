<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campaigns</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white">
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm font-semibold"
        >
          My Campaigns
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-secondary text-primary text-sm font-semibold"
        >
          Scenarios
        </button>
      </div> --}}

      <!-- Chart Section -->
      <div class="bg-secondary p-6 w-full rounded-lg">
        <h1 class="text-primary text-[18px] font-semibold mb-1">
          Daily stats about active visitors
        </h1>
        <h6 class="text-[#3F3F3F] mb-4 text-sm">
          Email sent to confirm user subscription to a list.
        </h6>
        <canvas id="lineChart" height="50"></canvas>
      </div>
    </div>


  </body>
</html>
