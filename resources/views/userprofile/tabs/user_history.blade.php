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
      <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg bg-secondary text-primary text-sm font-semibold"
        >
          My Segments
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Lists
        </button>

        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Defaults
        </button>
      </div>

      <!-- Date -->
      <div class="flex flex-wrap items-center gap-2 mt-5">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Latest Emails</h1>
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

      <div class="flex justify-end items-center mb-6">
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input
              type="text"
              placeholder="Search"
              class="border-gray-300 border-b px-3 py-1 pl-8"
            />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5 text-gray-400 absolute left-2 top-2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
              />
            </svg>
          </div>
          <button
            class="bg-secondary text-primary px-3 py-1 font-bold rounded-md"
          >
            Running
          </button>
          <button
            class="border-gray-200 border text-gray-600 px-3 py-1 font-bold rounded-md"
          >
            Paused
          </button>
        </div>
      </div>

      <!-- table -->

      <div class="overflow-x-auto p-2">
        <table
          class="min-w-full border-separate border-spacing-y-2 rounded-2xl shadow-sm"
        >
          <thead class="overflow-hidden">
            <tr class="bg-secondary text-primary text-left text-sm">
              <th class="px-4 py-4 rounded-l-2xl !rounded-b-none">
                <div class="flex items-center gap-2">
                  <input type="checkbox" />
                  <span class="font-semibold">Contacts (12,346)</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
  <path d="M0.271365 5.63653C-0.0250978 5.41819 -0.0884257 5.00086 0.129918 4.7044C0.299512 4.47412 0.469143 4.25523 0.617924 4.06459C0.914934 3.68401 1.32382 3.17432 1.76805 2.66268C2.20941 2.15435 2.69877 1.62885 3.15563 1.22518C3.38329 1.02402 3.61859 0.839024 3.84804 0.700704C4.05919 0.573415 4.34932 0.433108 4.66674 0.433106C4.98416 0.433108 5.27431 0.573415 5.48545 0.700704C5.7149 0.839024 5.9502 1.02402 6.17787 1.22518C6.63473 1.62885 7.12409 2.15435 7.56544 2.66268C8.00968 3.17432 8.41856 3.68401 8.71557 4.06459C8.86435 4.25523 9.03398 4.47412 9.20358 4.7044C9.42192 5.00086 9.35859 5.41819 9.06213 5.63653C8.94296 5.7243 8.80425 5.76655 8.66679 5.76644L4.66674 5.76644L0.66671 5.76644C0.529246 5.76655 0.390537 5.7243 0.271365 5.63653Z" fill="#0234D9"/>
  <path d="M9.06238 8.56366C9.35884 8.78201 9.42217 9.19934 9.20382 9.4958C9.03423 9.72607 8.8646 9.94496 8.71582 10.1356C8.41881 10.5162 8.00992 11.0259 7.56569 11.5375C7.12433 12.0458 6.63497 12.5713 6.17811 12.975C5.95045 13.1762 5.71515 13.3612 5.4857 13.4995C5.27455 13.6268 4.98442 13.7671 4.667 13.7671C4.34958 13.7671 4.05943 13.6268 3.84829 13.4995C3.61884 13.3612 3.38354 13.1762 3.15587 12.975C2.69901 12.5713 2.20965 12.0458 1.7683 11.5375C1.32406 11.0259 0.915178 10.5162 0.618168 10.1356C0.469387 9.94496 0.299756 9.72607 0.130161 9.4958C-0.0881814 9.19934 -0.0248536 8.78201 0.271608 8.56366C0.390781 8.47589 0.52949 8.43364 0.666954 8.43376L4.667 8.43376L8.66703 8.43376C8.80449 8.43364 8.9432 8.47589 9.06238 8.56366Z" fill="#A7CCFF"/>
</svg>

                </div>
              </th>
              <th class="px-4 py-4 font-semibold">Email</th>
              <th class="px-4 py-4 font-semibold">Created at</th>
              <th class="px-4 py-4 font-semibold rounded-r-2xl !rounded-b-none">
                Downloads
              </th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700">
            <tr class="bg-white">
              <td class="px-4 py-4">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600">jason@gmail.com</td>
              <td class="px-4 py-4 text-gray-500">22/10/2022</td>
              <td class="px-4 py-4">
                <button
                  class="bg-primary rounded-full text-sm text-white w-[100px] px-4 py-2 flex justify-between items-center gap-2"
                >
                  Send
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    height="7"
                    viewBox="0 0 10 7"
                    fill="none"
                  >
                    <path
                      d="M9.72864 1.06317C10.0251 1.28152 10.0884 1.69885 9.87008 1.99531C9.70049 2.22558 9.53086 2.44447 9.38208 2.63512C9.08507 3.0157 8.67618 3.52538 8.23195 4.03702C7.79059 4.54535 7.30123 5.07086 6.84437 5.47453C6.61671 5.67569 6.38141 5.86068 6.15196 5.999C5.94081 6.12629 5.65068 6.2666 5.33326 6.2666C5.01584 6.2666 4.72569 6.12629 4.51455 5.999C4.2851 5.86068 4.0498 5.67569 3.82213 5.47453C3.36527 5.07086 2.87591 4.54535 2.43456 4.03702C1.99032 3.52538 1.58144 3.0157 1.28443 2.63512C1.13565 2.44447 0.966016 2.22558 0.796421 1.99531C0.578078 1.69885 0.641406 1.28152 0.937868 1.06317C1.05704 0.975404 1.19575 0.933156 1.33321 0.933271L5.33326 0.933271L9.33329 0.933271C9.47075 0.933156 9.60946 0.975404 9.72864 1.06317Z"
                      fill="#CABCF8"
                    />
                  </svg>
                </button>
              </td>
            </tr>

            <tr class="bg-white">
              <td class="px-4 py-4">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600">jason@gmail.com</td>
              <td class="px-4 py-4 text-gray-500">22/10/2022</td>
              <td class="px-4 py-4">
                <button
                  class="bg-primary rounded-full text-sm text-white w-[100px] px-4 py-2 flex justify-between items-center gap-2"
                >
                  Send
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    height="7"
                    viewBox="0 0 10 7"
                    fill="none"
                  >
                    <path
                      d="M9.72864 1.06317C10.0251 1.28152 10.0884 1.69885 9.87008 1.99531C9.70049 2.22558 9.53086 2.44447 9.38208 2.63512C9.08507 3.0157 8.67618 3.52538 8.23195 4.03702C7.79059 4.54535 7.30123 5.07086 6.84437 5.47453C6.61671 5.67569 6.38141 5.86068 6.15196 5.999C5.94081 6.12629 5.65068 6.2666 5.33326 6.2666C5.01584 6.2666 4.72569 6.12629 4.51455 5.999C4.2851 5.86068 4.0498 5.67569 3.82213 5.47453C3.36527 5.07086 2.87591 4.54535 2.43456 4.03702C1.99032 3.52538 1.58144 3.0157 1.28443 2.63512C1.13565 2.44447 0.966016 2.22558 0.796421 1.99531C0.578078 1.69885 0.641406 1.28152 0.937868 1.06317C1.05704 0.975404 1.19575 0.933156 1.33321 0.933271L5.33326 0.933271L9.33329 0.933271C9.47075 0.933156 9.60946 0.975404 9.72864 1.06317Z"
                      fill="#CABCF8"
                    />
                  </svg>
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
<path d="M6.0213 0.277349L7.19018e-08 6.07053L6.0213 11.8637C6.07568 11.9321 6.14477 11.9884 6.22389 12.029C6.30301 12.0696 6.39032 12.0934 6.47989 12.0989C6.56947 12.1044 6.65923 12.0913 6.7431 12.0607C6.82696 12.0301 6.90298 11.9826 6.96599 11.9214C7.02901 11.8602 7.07755 11.7868 7.10834 11.7061C7.13913 11.6254 7.15145 11.5393 7.14445 11.4537C7.13746 11.368 7.11132 11.2848 7.0678 11.2097C7.02429 11.1345 6.96441 11.0692 6.89223 11.0181L2.38722 6.67024L14.3734 6.67024C14.5396 6.67024 14.699 6.60706 14.8165 6.49459C14.934 6.38212 15 6.22959 15 6.07053C15 5.91148 14.934 5.75894 14.8165 5.64647C14.699 5.53401 14.5396 5.47082 14.3734 5.47082L2.38722 5.47082L6.89223 1.12294C7.00938 1.01001 7.07487 0.857164 7.07428 0.698023C7.0737 0.538881 7.00708 0.386481 6.8891 0.274349C6.77111 0.162217 6.61142 0.0995379 6.44515 0.100101C6.27888 0.100662 6.11966 0.164421 6.00251 0.277349L6.0213 0.277349Z" fill="#0234D9"/>
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
<path d="M8.9787 11.9228L15 6.12966L8.9787 0.336478C8.92432 0.268127 8.85523 0.211757 8.77611 0.171185C8.69699 0.130612 8.60968 0.106785 8.52011 0.101314C8.43053 0.095844 8.34077 0.108859 8.2569 0.139478C8.17304 0.170098 8.09702 0.217606 8.03401 0.278788C7.97099 0.339969 7.92245 0.413396 7.89166 0.494096C7.86087 0.574796 7.84855 0.660886 7.85555 0.746537C7.86254 0.832188 7.88868 0.915401 7.9322 0.990542C7.97571 1.06568 8.03559 1.131 8.10777 1.18207L12.6128 5.52995L0.626568 5.52995C0.460392 5.52995 0.301023 5.59314 0.183519 5.7056C0.066015 5.81807 6.97066e-07 5.97061 6.90114e-07 6.12966C6.83161e-07 6.28871 0.066015 6.44125 0.183519 6.55372C0.301023 6.66619 0.460392 6.72937 0.626568 6.72937L12.6128 6.72937L8.10777 11.0773C7.99062 11.1902 7.92513 11.343 7.92572 11.5022C7.9263 11.6613 7.99292 11.8137 8.1109 11.9258C8.22889 12.038 8.38858 12.1007 8.55485 12.1001C8.72112 12.0995 8.88034 12.0358 8.99749 11.9228L8.9787 11.9228Z" fill="#0234D9"/>
</svg>

       
        </button>
      </div>
    </div>
  </body>
</html>
