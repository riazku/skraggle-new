<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usage</title>
    <!-- Add CSS links or styles here -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

{{-- <body class="p-4 bg-gray-100">
    <div class="container mx-auto p-6">
        

        <!-- Plan Level Value -->
        <div class="mb-6 p-4 bg-secondary space-y-3 rounded-lg">
            <p class="text-gray-700 text-base">Plan Level Value:</p>
            <h2 class="text-primary text-3xl font-bold">150+ <span class="text-sm font-normal">(exceeding)</span></h2>
        </div>

        <!-- Active Users Current Month -->
        <div class="mb-6 bg-secondary rounded-lg p-3">
            <p class="text-gray-700 text-sm mb-2">Active Users Current Month</p>
            <div class="dot absolute left-1 top-1 bg-[#A7CCFF] w-6 h-6 rounded-full transition">
                <div class="h-4 bg-[#88BAFF]   rounded-full" style="width: 60%;"></div>
                <span class="absolute top-1 right-2 text-xs  text-center text-white">100K</span>
            </div>
          
        </div>

        <div class="flex space-x-4">
            <div class=" w-96 p-4 bg-secondary rounded">
                <p class="text-primary  text-sm">Used</p>
                <h2 class="text-primary text-4xl font-bold">00.0(0.00%)</h2>
            </div>
            <div class="w-96 p-4 bg-secondary rounded">
                <p class="text-primary  text-sm">Level Limit</p>
                <h2 class="text-primary text-4xl font-bold">20K</h2>
            </div>
        </div>




        <!-- Emails -->
        <div class="mb-6 mt-6 bg-secondary rounded-lg p-3">
            <p class="text-gray-700 text-sm mb-2">Email</p>
            <div class="dot absolute left-1 top-1 bg-black w-6 h-6 rounded-full transition">
                <div class="h-4 bg-[#88BAFF]   rounded-full" style="width: 60%;"></div>
                <span class="absolute top-1 right-2 text-xs  text-center text-white">100K</span>
            </div>
          
        </div>

        <div class="flex space-x-4">
            <div class=" w-96 p-4 bg-secondary rounded">
                <p class="text-primary  text-sm">Used</p>
                <h2 class="text-primary text-4xl font-bold">00.0(0.00%)</h2>
            </div>
            <div class="w-96 p-4 bg-secondary rounded">
                <p class="text-primary  text-sm">Level Limit</p>
                <h2 class="text-primary text-4xl font-bold">20K</h2>
            </div>
        </div>


    </div>
</body> --}}

<body>

    <div class="space-y-6 p-4 bg-white">
  <!-- Plan Level Value -->
  <div class="bg-secondary p-4 rounded">
    <p class="text-sm text-[#3F3F3F] py-2">Plan Level Value:</p>
    <p class="text-2xl font-bold text-primary">
      150+ <span class="text-md font-medium text-primary">(exceeding)</span>
    </p>
  </div>

  <!-- Active Users -->
  <div class="space-y-2 bg-secondary p-4 rounded-lg">
    <p class="text-sm text-[#3F3F3F] py-2">Active Users Current Month</p>
    <div class="relative w-full h-6 bg-[#A7CCFF] rounded-full">
      <div class="absolute inset-y-0 left-0 w-[45%] bg-[#88BAFF] rounded-full"></div>
      <span class="absolute right-90 top-0 text-xs font-bold text-primary h-full flex items-center">300K</span>
    </div>
    
  </div>

  <div class="flex gap-4 pt-2">
      <div class="flex-1 text-primary text-4xl font-bold bg-secondary p-4 rounded-lg shadow-sm">
        <span class="text-md block text-primary py-2">Used</span>
        00.0<span class="text-base font-medium text-primary">(0.00%)</span>
      </div>
      <div class="flex-1 text-primary text-4xl font-bold bg-secondary p-4 rounded-lg shadow-sm">
        
        <span class="text-md block text-primary py-2">Level Limit</span> 20K
      </div>
    </div>

  <!-- Emails -->
  <div class="space-y-2 bg-secondary p-4 rounded-lg">
    <p class="text-sm text-[#3F3F3F] py-2">Emails</p>
    <div class="relative w-full h-6 bg-[#A7CCFF] rounded-full">
      <div class="absolute inset-y-0 left-0 w-[35%] bg-[#88BAFF] rounded-full"></div>
      <span class="absolute right-80 top-0 text-xs font-bold text-primary h-full flex items-center">300K</span>
    </div>
    
  </div>
  <div class="flex gap-4 pt-2">
      <div class="flex-1 text-blue-700 text-4xl font-bold bg-secondary p-4 shadow-sm rounded-lg">
        <span class="text-md block text-primary py-2">Used</span>
        00.0<span class="text-base font-medium">(0.00%)</span>
      </div>
      <div class="flex-1 text-primary text-4xl font-bold bg-secondary p-4 shadow-sm rounded-lg">
        <span class="text-md block text-primary py-2">Level Limit</span> 60K
      </div>
    </div>
</div>

</body>



</html>