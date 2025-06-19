<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>

<body>
    <div class="container mx-auto p-4">

        <p class="text-[#3F3F3F] text-[16px] py-4">
            Auto import allows you to import data between devices.
        </p>


        <!-- Tabs -->
        {{-- <div class="flex flex-wrap space-x-1 mb-6">
   
    <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
  
    Old Purchases
    </button>
   <button class="px-3 py-1.5 rounded-lg bg-secondary text-primary text-sm font-semibold">
   Auto Import
    </button>
      
  </div> --}}




        <div class="flex flex-row gap-4">

            <div class="bg-secondary rounded-lg w-[50%] h-[400px] p-3">

                <div class="mt-1">
                    <h3 class="text-[#3F3F3F]">Title</h3>
                    <textarea type="text" name="" id=""
                        class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none"
                        placeholder="User email or ID"></textarea>
                </div>

                <div class="mt-1">
                    <h3 class="text-[#3F3F3F]">File Name</h3>
                    <textarea type="text" name="" id=""
                        class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none"
                        placeholder="Event Json"></textarea>
                </div>

                <div class="mt-1">
                    <h3 class="text-[#3F3F3F]">Code</h3>
                    <textarea type="text" name="" id=""
                        class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none"
                        placeholder="Event Json"></textarea>
                </div>

                <button class="py-2 px-6 mt-2 text-white bg-primary rounded-lg">Auto Data Import</button>

            </div>

            <div class="bg-secondary rounded-lg w-[50%] h-[370px] p-3">
                <h2 class="text-primary text-[20px] font-semibold">Push Events into the System</h2>

                <!-- table -->

                <div class="overflow-x-auto -ml-1 mt-3">
                    <table class="min-w-full border-separate bg-white border-spacing-y-0  rounded-2xl shadow-sm">
                        <thead class="overflow-hidden ">
                            <tr class="bg-secondary mt-12 text-primary text-left text-sm">
                                <th class="px-4 py-5 rounded-l-2xl !rounded-b-none">
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" />
                                        <span class="font-semibold">Contacts (12,346)</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
<path d="M0.771365 6.03644C0.474902 5.81809 0.411574 5.40076 0.629918 5.1043C0.799512 4.87403 0.969143 4.65513 1.11792 4.46449C1.41493 4.08391 1.82382 3.57423 2.26805 3.06259C2.70941 2.55426 3.19877 2.02875 3.65563 1.62508C3.88329 1.42392 4.11859 1.23893 4.34804 1.10061C4.55919 0.973317 4.84932 0.833011 5.16674 0.833008C5.48416 0.833011 5.77431 0.973317 5.98545 1.10061C6.2149 1.23893 6.4502 1.42392 6.67787 1.62508C7.13473 2.02875 7.62409 2.55426 8.06544 3.06259C8.50968 3.57423 8.91856 4.08391 9.21557 4.46449C9.36435 4.65514 9.53398 4.87403 9.70358 5.1043C9.92192 5.40076 9.85859 5.81809 9.56213 6.03644C9.44296 6.12421 9.30425 6.16645 9.16679 6.16634L5.16674 6.16634L1.16671 6.16634C1.02925 6.16645 0.890537 6.12421 0.771365 6.03644Z" fill="#0234D9"/>
<path d="M9.56238 8.96356C9.85884 9.18191 9.92217 9.59924 9.70382 9.8957C9.53423 10.126 9.3646 10.3449 9.21582 10.5355C8.91881 10.9161 8.50992 11.4258 8.06569 11.9374C7.62433 12.4457 7.13497 12.9713 6.67811 13.3749C6.45045 13.5761 6.21515 13.7611 5.9857 13.8994C5.77455 14.0267 5.48442 14.167 5.167 14.167C4.84958 14.167 4.55943 14.0267 4.34829 13.8994C4.11884 13.7611 3.88354 13.5761 3.65587 13.3749C3.19901 12.9713 2.70965 12.4457 2.2683 11.9374C1.82406 11.4258 1.41518 10.9161 1.11817 10.5355C0.969387 10.3449 0.799756 10.126 0.630161 9.8957C0.411819 9.59924 0.475146 9.18191 0.771608 8.96356C0.890781 8.87579 1.02949 8.83355 1.16695 8.83366L5.167 8.83366L9.16703 8.83366C9.30449 8.83355 9.4432 8.87579 9.56238 8.96356Z" fill="#A7CCFF"/>
</svg>
                                    </div>
                                </th>
                                <th class="px-4 py-5 font-semibold rounded-r-2xl !rounded-b-none">
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold">Email</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
<path d="M0.439333 6.03644C0.142871 5.81809 0.0795431 5.40076 0.297887 5.1043C0.467481 4.87403 0.637112 4.65513 0.785893 4.46449C1.0829 4.08391 1.49179 3.57423 1.93602 3.06259C2.37738 2.55426 2.86674 2.02875 3.3236 1.62508C3.55126 1.42392 3.78656 1.23893 4.01601 1.10061C4.22716 0.973317 4.51729 0.833011 4.83471 0.833008C5.15212 0.833011 5.44228 0.973317 5.65342 1.10061C5.88287 1.23893 6.11817 1.42392 6.34584 1.62508C6.8027 2.02875 7.29205 2.55426 7.73341 3.06259C8.17765 3.57423 8.58653 4.08391 8.88354 4.46449C9.03232 4.65514 9.20195 4.87403 9.37155 5.1043C9.58989 5.40076 9.52656 5.81809 9.2301 6.03644C9.11093 6.12421 8.97222 6.16645 8.83475 6.16634L4.83471 6.16634L0.834679 6.16634C0.697214 6.16645 0.558506 6.12421 0.439333 6.03644Z" fill="#A7CCFF"/>
<path d="M9.23034 8.96356C9.52681 9.18191 9.59013 9.59924 9.37179 9.8957C9.2022 10.126 9.03257 10.3449 8.88379 10.5355C8.58677 10.9161 8.17789 11.4258 7.73366 11.9374C7.2923 12.4457 6.80294 12.9713 6.34608 13.3749C6.11841 13.5761 5.88311 13.7611 5.65367 13.8994C5.44252 14.0267 5.15239 14.167 4.83497 14.167C4.51755 14.167 4.2274 14.0267 4.01625 13.8994C3.78681 13.7611 3.55151 13.5761 3.32384 13.3749C2.86698 12.9713 2.37762 12.4457 1.93626 11.9374C1.49203 11.4258 1.08315 10.9161 0.786137 10.5355C0.637356 10.3449 0.467725 10.126 0.29813 9.8957C0.0797873 9.59924 0.143115 9.18191 0.439577 8.96356C0.55875 8.87579 0.697458 8.83355 0.834923 8.83366L4.83496 8.83366L8.835 8.83366C8.97246 8.83355 9.11117 8.87579 9.23034 8.96356Z" fill="#A7CCFF"/>
</svg>
   
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            <tr class="bg-white">
                                <td class="px-4 py-5">
                                    <div class="flex items-center">
                                        <input type="checkbox" />
                                        <span class="ml-2">Group-DB303GF</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>

                            </tr>
                            <tr class="bg-white">
                                <td class="px-4 py-5 ">
                                    <div class="flex items-center">
                                        <input type="checkbox" />
                                        <span class="ml-2">Group-DB303GF</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>

                            </tr>
                            <tr class="bg-white">
                                <td class="px-4 py-5">
                                    <div class="flex items-center">
                                        <input type="checkbox" />
                                        <span class="ml-2">Group-DB303GF</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>

                            </tr>
                            <tr class="bg-white">
                                <td class="px-4 py-5 rounded-l-2xl">
                                    <div class="flex items-center">
                                        <input type="checkbox" />
                                        <span class="ml-2">Group-DB303GF</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-gray-600 rounded-r-2xl">jason@gmail.com</td>

                            </tr>

                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>


    </div>

</body>

</html>
