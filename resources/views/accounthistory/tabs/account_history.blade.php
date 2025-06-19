<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .bg-secondary { background-color: #EEEAFF; }
          .text-purple-900 { color: primary; }
          .bg-purple-300 { background-color: #CABCF8; }
          .border-purple-500 { border-color: #AD94FF; }
          .bg-secondary { background-color: primary; }
        }
      </style>
</head>
<body>

    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-secondary">
                    <tr>
                      <th class="px-4 py-5 rounded-l-2xl !rounded-b-none">
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox">
                                        <span class="font-semibold text-primary">HISTORY LOG</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
<path d="M0.771365 6.03644C0.474902 5.81809 0.411574 5.40076 0.629918 5.1043C0.799512 4.87403 0.969143 4.65513 1.11792 4.46449C1.41493 4.08391 1.82382 3.57423 2.26805 3.06259C2.70941 2.55426 3.19877 2.02875 3.65563 1.62508C3.88329 1.42392 4.11859 1.23893 4.34804 1.10061C4.55919 0.973317 4.84932 0.833011 5.16674 0.833008C5.48416 0.833011 5.77431 0.973317 5.98545 1.10061C6.2149 1.23893 6.4502 1.42392 6.67787 1.62508C7.13473 2.02875 7.62409 2.55426 8.06544 3.06259C8.50968 3.57423 8.91856 4.08391 9.21557 4.46449C9.36435 4.65514 9.53398 4.87403 9.70358 5.1043C9.92192 5.40076 9.85859 5.81809 9.56213 6.03644C9.44296 6.12421 9.30425 6.16645 9.16679 6.16634L5.16674 6.16634L1.16671 6.16634C1.02925 6.16645 0.890537 6.12421 0.771365 6.03644Z" fill="#0234D9"></path>
<path d="M9.56238 8.96356C9.85884 9.18191 9.92217 9.59924 9.70382 9.8957C9.53423 10.126 9.3646 10.3449 9.21582 10.5355C8.91881 10.9161 8.50992 11.4258 8.06569 11.9374C7.62433 12.4457 7.13497 12.9713 6.67811 13.3749C6.45045 13.5761 6.21515 13.7611 5.9857 13.8994C5.77455 14.0267 5.48442 14.167 5.167 14.167C4.84958 14.167 4.55943 14.0267 4.34829 13.8994C4.11884 13.7611 3.88354 13.5761 3.65587 13.3749C3.19901 12.9713 2.70965 12.4457 2.2683 11.9374C1.82406 11.4258 1.41518 10.9161 1.11817 10.5355C0.969387 10.3449 0.799756 10.126 0.630161 9.8957C0.411819 9.59924 0.475146 9.18191 0.771608 8.96356C0.890781 8.87579 1.02949 8.83355 1.16695 8.83366L5.167 8.83366L9.16703 8.83366C9.30449 8.83355 9.4432 8.87579 9.56238 8.96356Z" fill="#A7CCFF"></path>
</svg>
                                    </div>
                                </th>

                        
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-primary uppercase tracking-wider">
                            Created at
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample Row 1 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Donation to Campaign ID-300434DFD</div>
                                    <div class="text-sm text-gray-500">Here can be texts that may shed details on the group.</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            22/10/2022
                        </td>
                    </tr>
                    <!-- Sample Row 2 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Donation to Campaign ID-300434DFD</div>
                                    <div class="text-sm text-gray-500">Here can be texts that may shed details on the group.</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            22/10/2022
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>