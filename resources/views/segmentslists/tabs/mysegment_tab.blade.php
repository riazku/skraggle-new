<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container mx-auto p-6">

      
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Segments
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Lists
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-secondary text-primary text-sm font-semibold"
        >
          Defaults
        </button>
      </div> --}}

      <!-- Date -->
      <div class="flex flex-wrap items-center gap-2 mt-5">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Segment History</h1>
        <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] !border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <span class="text-[17px] text-[#B2B9C7] font-medium text-[#B2B9C7]">
            To
          </span>
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] !border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>

      <!-- table -->

      <div class="overflow-x-auto bg-[#FFFFFF] !rounded-lg">
        <table
          class="min-w-full border-separate !rounded-lg border-spacing-y-2"
        >
          <thead>
            <tr
              class="bg-secondary text-primary text-primary text-left text-sm"
            >
              <th class="px-4 py-4 flex gap-1 rounded-lg">
                <input type="checkbox" />
                <span class="ml-2 font-semibold">Contacts (12,346) </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
<path d="M0.271365 6.03644C-0.0250978 5.81809 -0.0884257 5.40076 0.129918 5.1043C0.299512 4.87403 0.469143 4.65513 0.617924 4.46449C0.914934 4.08391 1.32382 3.57423 1.76805 3.06259C2.20941 2.55426 2.69877 2.02875 3.15563 1.62508C3.38329 1.42392 3.61859 1.23893 3.84804 1.10061C4.05919 0.973317 4.34932 0.833011 4.66674 0.833008C4.98416 0.833011 5.27431 0.973317 5.48545 1.10061C5.7149 1.23893 5.9502 1.42392 6.17787 1.62508C6.63473 2.02875 7.12409 2.55426 7.56544 3.06259C8.00968 3.57423 8.41856 4.08391 8.71557 4.46449C8.86435 4.65514 9.03398 4.87403 9.20358 5.1043C9.42192 5.40076 9.35859 5.81809 9.06213 6.03644C8.94296 6.12421 8.80425 6.16645 8.66679 6.16634L4.66674 6.16634L0.66671 6.16634C0.529246 6.16645 0.390537 6.12421 0.271365 6.03644Z" fill="#0234D9"/>
<path d="M9.06238 8.96356C9.35884 9.18191 9.42217 9.59924 9.20382 9.8957C9.03423 10.126 8.8646 10.3449 8.71582 10.5355C8.41881 10.9161 8.00992 11.4258 7.56569 11.9374C7.12433 12.4457 6.63497 12.9713 6.17811 13.3749C5.95045 13.5761 5.71515 13.7611 5.4857 13.8994C5.27455 14.0267 4.98442 14.167 4.667 14.167C4.34958 14.167 4.05943 14.0267 3.84829 13.8994C3.61884 13.7611 3.38354 13.5761 3.15587 13.3749C2.69901 12.9713 2.20965 12.4457 1.7683 11.9374C1.32406 11.4258 0.915178 10.9161 0.618168 10.5355C0.469387 10.3449 0.299756 10.126 0.130161 9.8957C-0.0881814 9.59924 -0.0248536 9.18191 0.271608 8.96356C0.390781 8.87579 0.52949 8.83355 0.666954 8.83366L4.667 8.83366L8.66703 8.83366C8.80449 8.83355 8.9432 8.87579 9.06238 8.96356Z" fill="#A7CCFF"/>
</svg>
              </th>
              <th class="px-4 py-2 font-semibold">Email</th>
              <th class="px-4 py-2 font-semibold">Created at</th>
              <th class="px-4 py-2 font-semibold">Assignee</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700 border !border-1">
            <tr class="bg-white shadow rounded-lg">
              <td class="px-4 py-4 flex items-center">
                <input type="checkbox" />
                <span class="ml-2">Group-DB303GF</span>
              </td>
              <td class="px-4 py-2 text-gray-600">jason@gmail.com</td>

              <td class="px-4 py-2 text-gray-500">22/10/2022</td>
              <td class="px-4 py-2 font-medium flex items-center gap-2">
                <button
                  class="bg-primary rounded-full text-sm text-white px-4 py-2"
                >
                  Download
                </button>
              </td>
            </tr>
            <tr class="bg-white shadow rounded-lg">
              <td class="px-4 py-4 flex items-center">
                <input type="checkbox" />
                <span class="ml-2">Group-DB303GF</span>
              </td>
              <td class="px-4 py-2 text-gray-600">jason@gmail.com</td>

              <td class="px-4 py-2 text-gray-500">22/10/2022</td>
              <td class="px-4 py-2 font-medium flex items-center gap-2">
                <button
                  class="bg-primary rounded-full text-sm text-white px-4 py-2"
                >
                  Download
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Navigation -->

      <div class="flex justify-between items-center gap-2 mt-5">
        <button
          class="border-primary !border-1 flex justify-center items-center gap-2 text-primary py-2 px-3 rounded-lg"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13" fill="none">
  <path d="M6.0213 0.677251L7.19018e-08 6.47044L6.0213 12.2636C6.07568 12.332 6.14477 12.3883 6.22389 12.4289C6.30301 12.4695 6.39032 12.4933 6.47989 12.4988C6.56947 12.5043 6.65923 12.4912 6.7431 12.4606C6.82696 12.43 6.90298 12.3825 6.96599 12.3213C7.02901 12.2601 7.07755 12.1867 7.10834 12.106C7.13913 12.0253 7.15145 11.9392 7.14445 11.8536C7.13746 11.7679 7.11132 11.6847 7.0678 11.6096C7.02429 11.5344 6.96441 11.4691 6.89223 11.418L2.38722 7.07014L14.3734 7.07014C14.5396 7.07014 14.699 7.00696 14.8165 6.89449C14.934 6.78203 15 6.62949 15 6.47044C15 6.31138 14.934 6.15884 14.8165 6.04638C14.699 5.93391 14.5396 5.87073 14.3734 5.87073L2.38722 5.87073L6.89223 1.52284C7.00938 1.40991 7.07487 1.25707 7.07428 1.09793C7.0737 0.938784 7.00708 0.786384 6.8891 0.674252C6.77111 0.56212 6.61142 0.49944 6.44515 0.500003C6.27888 0.500565 6.11966 0.564323 6.00251 0.677251L6.0213 0.677251Z" fill="#0234D9"/>
</svg>
          Previous
        </button>

        <div class="flex justify-center items-center gap-1">
          <button
            class="bg-primary rounded-lg text-white text-center px-4 py-2"
          >
            1
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            2
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            3
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            ...
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            47
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            48
          </button>
        </div>
        <button
          class="border-primary !border-1 flex justify-center items-center gap-2 text-primary py-2 px-3 rounded-lg"
        >
          Next

        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13" fill="none">
  <path d="M8.9787 12.3227L15 6.52956L8.9787 0.73638C8.92432 0.66803 8.85523 0.61166 8.77611 0.571087C8.69699 0.530515 8.60968 0.506687 8.52011 0.501217C8.43053 0.495746 8.34077 0.508762 8.2569 0.539381C8.17304 0.57 8.09702 0.617508 8.03401 0.67869C7.97099 0.739872 7.92245 0.813298 7.89166 0.893998C7.86087 0.974698 7.84855 1.06079 7.85555 1.14644C7.86254 1.23209 7.88868 1.3153 7.9322 1.39044C7.97571 1.46559 8.03559 1.5309 8.10777 1.58197L12.6128 5.92986L0.626568 5.92986C0.460392 5.92986 0.301023 5.99304 0.183519 6.10551C0.066015 6.21797 6.97066e-07 6.37051 6.90114e-07 6.52956C6.83161e-07 6.68862 0.066015 6.84116 0.183519 6.95362C0.301023 7.06609 0.460392 7.12927 0.626568 7.12927L12.6128 7.12927L8.10777 11.4772C7.99062 11.5901 7.92513 11.7429 7.92572 11.9021C7.9263 12.0612 7.99292 12.2136 8.1109 12.3257C8.22889 12.4379 8.38858 12.5006 8.55485 12.5C8.72112 12.4994 8.88034 12.4357 8.99749 12.3227L8.9787 12.3227Z" fill="#0234D9"/>
</svg>
        </button>
      </div>
    </div>
  </body>
</html>
