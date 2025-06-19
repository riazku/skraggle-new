<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Laravel App</title>

</head>



<body>
    <header class="fixed top-0 right-0 left-20 w-auto bg-white z-30">
        {{-- Header Navigation --}}
        <nav class="px-4 py-5">
            <div class="flex items-center justify-between">
                {{-- Left Section: Search Bar --}}
                <div class="relative flex items-center">
                    <span class="absolute left-3 text-gray-400 hover:text-purple-500 transition-colors">
                        <img src="{{ asset('images/IconText.svg') }}" alt="Search" class="w-5 h-5">
                        
                    </span>
                    <input
                        type="text"
                        placeholder="Search"
                        class="pl-10 pr-4 py-2 rounded-full bg-secondary text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:bg-white transition-all duration-200 w-64 "
                    />
                </div>

                {{-- Right Section --}}
                <div class="flex items-center space-x-2">
                    {{-- Language Selector --}}
                  <div class="relative">
                    <button onclick="toggleLanguageDropdown()" class="bg-secondary text-primary px-4 py-2 rounded-full flex items-center space-x-2 text-sm font-medium  transition-colors duration-200">
                        <span>ENG</span>
                        <svg class="w-4 h-4 text-primary transition-transform duration-200" 
                             :class="{'rotate-[90deg]': isOpen}"
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Language Dropdown Menu --}}
                    <div id="languageDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-1">
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-secondary hover:text-primary">
                                GER
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-secondary hover:text-primary">
                                ESP
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-secondary hover:text-primary">
                                FAR
                            </a>
                      
                        </div>
                    </div>
                  </div>

                    {{-- Notification Icon --}}
                    <div class="relative">
                        <button onclick="toggleNotificationDropdown()" class="bg-secondary text-primary p-2.5 rounded-full flex items-center justify-center transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-secondary">
                            <img src="{{ asset('images/Group 21538.svg') }}" alt="Notifications" class="w-5 h-5">
                        </button>
                        <span class="absolute -top-1 -right-1 block h-3.5 w-3.5 rounded-full bg-primary 0 ring-2 ring-white"></span>

                        {{-- Notification Dropdown --}}
                        <div id="notificationDropdown" class="absolute right-0 mt-2 w-96 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                            <div class="p-4 border-b border-gray-100">
                                <h3 class="text-lg font-semibold text-gray-900">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                {{-- Notification Items --}}
                                <div class="p-4 hover:bg-secondary border-b border-gray-100 cursor-pointer">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0">
                                            <span class="inline-block p-2 bg-secondary rounded-full">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">New message received</p>
                                            <p class="text-sm text-gray-500 mt-1">John Doe sent you a message</p>
                                            <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="h-2 w-2 bg-secondary0 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Add more notification items here --}}
                            </div>
                            <div class="p-4 border-t border-gray-100">
                                <a href="#" class="block text-center text-sm text-primary hover:text-primary font-medium">
                                    View all notifications
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="relative">
                      <button onclick="toggleProfileDropdown()" class="bg-secondary text-primary px-3 py-2 rounded-full flex items-center space-x-2 text-sm font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-secondary">
                          <img src="{{ asset('images/Profile.png') }}" alt="User Avatar" class="w-7 h-7 rounded-full object-cover ring-2 ring-white">
                          <span>Tim Joka</span>
                          <svg class="w-4 h-4 text-primary transition-transform duration-200" 
                              :class="{'rotate-[90deg]': isOpen}"
                              fill="none" 
                              stroke="currentColor" 
                              viewBox="0 0 24 24">
                              <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M19 9l-7 7-7-7" />
                          </svg>
                      </button>

                      {{-- Profile Dropdown Menu --}}
                      <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                          <div class="py-1">
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-secondary hover:text-primary">
                                  Profile
                              </a>
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-secondary hover:text-primary">
                                  Settings
                              </a>
                              <div class="border-t border-gray-100 my-1"></div>
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                  Sign out
                              </a>
                          </div>
                      </div>
                  </div>





                    


                </div>
            </div>
        </nav>
    </header>

    {{-- Add margin-top to prevent content from going under fixed header --}}
    <main class="mt-16">
        {{-- Your main content goes here --}}
    </main>


    <script>
        function toggleLanguageDropdown() {
            const dropdown = document.getElementById('languageDropdown');
            const button = event.currentTarget;
            const svg = button.querySelector('svg');
            
            dropdown.classList.toggle('hidden');
            svg.classList.toggle('rotate-[90deg]');
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.relative')) {
                    dropdown.classList.add('hidden');
                    svg.classList.remove('rotate-[90deg]');
                }
            });
        }

        function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        const button = event.currentTarget;
        const svg = button.querySelector('svg');
        
        dropdown.classList.toggle('hidden');
        svg.classList.toggle('rotate-[90deg]');
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                dropdown.classList.add('hidden');
                svg.classList.remove('rotate-[90deg]');
            }
        });
    }

    function toggleNotificationDropdown() {
        const dropdown = document.getElementById('notificationDropdown');
        const button = event.currentTarget;
        
        dropdown.classList.toggle('hidden');
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                dropdown.classList.add('hidden');
            }
        });
    }
    </script>
</body>
</html>