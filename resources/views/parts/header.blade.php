<header class="h-15 max-w-max text-white  bg-cyan-950 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="text-white ml-3 text-xl">Laravel Practice</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900">First Link</a>
        <a class="mr-5 hover:text-gray-900">Second Link</a>
        <a class="mr-5 hover:text-gray-900">Third Link</a>
        <a class="mr-5 hover:text-gray-900">Fourth Link</a>
        </nav>

<!-- ダウンメニュー部分 -->
<div class="relative">
    <button id="menu-button" type="button" class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-white" aria-expanded="false">
        <span>List</span>
        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
    </button>

    <div id="menu" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 transition ease-out duration-200 opacity-0 translate-y-1">
    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
            <div class="group relative flex gap-x-3 rounded-lg p-2 hover:bg-gray-50">
                    <div class="block px-4 py-2 text-sm text-gray-700">
                        <svg class="h-3 px-3 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                    </div>
                    <div>
                        <a href="#" class="font-semibold text-gray-900">
                        Analytics
                        <span class="absolute inset-0"></span>
                        </a>
                    </div>
            </div>
            <div class="group relative flex gap-x-3 rounded-lg p-2 hover:bg-gray-50">
                <div class="mt-1 flex h-4 px-4 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-3 px-3 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                    </svg>
                </div>
                <div>
                    <a href="#" class="font-semibold text-gray-900">
                    Engagement
                    <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-3 rounded-lg p-2 hover:bg-gray-50">
                <div class="mt-1 flex h-4 px-4 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-3 px-3 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                    </svg>
                </div>
                <div>
                    <a href="#" class="font-semibold text-gray-900">
                    Security
                    <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
