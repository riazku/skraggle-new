<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>@yield('title', 'My Laravel App')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- @vite('resources/css/app.css') --}}
    

    
    <style>

      /* Custom styles for active tab */
      .tab-button.active {
        background-color: primary; /* Example active background color */
        color: white; /* Example active text color */
      }
      </style>
</head>



<body>

<div class="h-screen">

    <div>
        @include('components.sidebar')
    </div>

     <div>>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.segmentslists_tab')
    </div>

</div>
    


    {{-- Main Content Wrapper --}}
    <div class=" w-[77%] mx-auto mt-45 ml-48" x-data="{ activeTab: 'segmentlist-mysegment-tab' }">
         <div id="tab-content" class="mt-4">
        </div>
    </div>
      
        {{-- @include('tabs.overview') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- @include('tabs.getting-started') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- Content Area --}}
        {{-- <div class="flex-1 mt-[195px] ml-[190px] p-2">
            @yield('content')
        {{-- Content Area --}}
    


        {{-- Main Content Area --}}
        {{-- <main class="flex-1 mt-[195px] ml-[190px] p-2">
            {{-- @include('components.container') --}}
             {{-- @include('components.overview') --}}
 
    
<script src = "{{asset('js/tabs.js')}}"></script>

</body>
</html>
