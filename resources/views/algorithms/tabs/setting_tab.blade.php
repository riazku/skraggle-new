<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>


    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded bg-secondary text-primary">Default Settings</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Cross Sells</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Product Match </button>
            
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Test Algorithms</button>

 

        </div>      --}}

        <!-- Introductory text -->
        <p class="mb-6 text-gray-700">The following settings will be applied to all product recommendation blocks. You can overwrite them in campaigns.</p>

        <!-- Include & Exclude Filters Section -->
        <div class="!bg-secondary p-6 rounded mb-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-primary">Include & Exclude Filters</h3>
                <div>
                    <button class="px-4 py-1 rounded bg-[#A7CCFF] text-primary text-medium font-bold"  >Basic</button>
                    <button class="px-4 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-200 text-sm">Advanced</button>
                </div>
            </div>

            <!-- Exclude Products -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Exclude Products</label>
                <input type="text" placeholder="User email or ID" class="w-full h-16 px-3 py-2 border border-gray-300 rounded bg-white">
            </div>

            <!-- Add Products -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Add Products</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Exclude Categories -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Exclude Categories</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Add Categories -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Add Categories</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Minimum Stock -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Minimum Stock</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Minimum Price -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Minimum Price</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Only main items -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Only main items</label>
                <div>
                    <button class="px-4 py-1 rounded border-lg border-gray-300 text-gray-700 !bg-[#A7CCFF] text-primary ">True</button>
                    <button class="px-4 py-1 rounded border-lg border-gray-300 text-gray-700 !bg-[#A7CCFF] text-primary">False</button>
                </div>
            </div>

            <!-- Save Button -->
            <button class="px-6 py-2 bg-primary text-white rounded">Save</button>

        </div>


    </div>
    
</body>
</html>