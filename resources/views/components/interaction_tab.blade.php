<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
  </head>
  <body>


  <div class="fixed z-20 top-[123px] left-[320px] right-0 z-10 bg-white">
    <div class="flex items-center space-x-4 px-8 py-4">

    <button
        id="interaction-mycampaign-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('interaction.tabs.interaction_mycampaign_tab') }}"
        data-content-target="tab-content"
        data-default-tab="true"
    >
        My Campaigns
    </button>
    <button
        id="interaction-scenarios-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('interaction.tabs.interaction_scenarios_tab') }}"
        data-content-target="tab-content"
          data-default-tab="true"
    >
        Scenarios
    </button>
    

   


    </div>
</div>



  </body>
</html>