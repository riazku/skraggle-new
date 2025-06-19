<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chart Example</title>

  <!-- Tailwind via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50">

  <div class="container mx-auto p-6">
    <!-- Header and Date Selector -->
    <div class="flex flex-wrap items-center gap-2 mt-2">
      <h1 class="text-[#3F3F3F] font-bold text-[19px]">Charts</h1>
      <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
        <button class="bg-[#ebeff3] text-[#3F3F3F] rounded-md px-3 p-1 flex items-center gap-2">
          <span>12/5/2024</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="#3F3F3F"><path d="M5.36 5.93h7.23M4.86 1.83v1.23M12.98 1.83v1.23M15.38 5.31v8.61c0 1.24-1 2.25-2.25 2.25H4.88a2.25 2.25 0 0 1-2.25-2.25V5.31c0-1.24 1-2.25 2.25-2.25h8.25c1.24 0 2.25 1 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <span class="text-[17px] text-[#B2B9C7]">To</span>
        <button class="bg-[#ebeff3] text-[#3F3F3F] rounded-md px-3 p-1 flex items-center gap-2">
          <span>12/5/2024</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="#3F3F3F"><path d="M5.36 5.93h7.23M4.86 1.83v1.23M12.98 1.83v1.23M15.38 5.31v8.61c0 1.24-1 2.25-2.25 2.25H4.88a2.25 2.25 0 0 1-2.25-2.25V5.31c0-1.24 1-2.25 2.25-2.25h8.25c1.24 0 2.25 1 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>
  

    <!-- Chart Box -->
    <div class="bg-secondary p-4 w-full rounded-lg mt-4">
      <h1 class="text-primary text-[18px] font-semibold mb-1">
        Daily stats about active visitors
      </h1>
      <h6 class="text-[#3F3F3F] mb-4 text-sm">
        Email sent to confirm user subscription to a list.
      </h6>
      <canvas id="lineChart3" height="50"></canvas>
    </div>

  </div>





</body>
</html>
