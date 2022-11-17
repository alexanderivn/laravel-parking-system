{{-- Sidebar --}}

<section x-cloak class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"
         :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"></section>

<aside class="shadow-lg fixed inset-y-0 left-0 z-30 w-64 transform overflow-y-auto bg-white transition duration-300 lg:static lg:inset-0 lg:translate-x-0"
       :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'">
  <section class="mt-8 flex items-center justify-center">
    <a href="">
      <heading class="flex items-center px-8">
        <h1 class="font-bold text-2xl">Parking System</h1>
      </heading>
    </a>
  </section>


  <nav class="mt-10 px-4">

    <ul>
      <a class="transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-blue-600 hover:text-white"
         href="#">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
          </path>
        </svg>
        <li class="mx-3">{{ __('Dashboard') }}</li>
      </a>

      <a class="transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-jolly-dental-orange hover:text-white"
         href="">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <li class="mx-3">{{ __('inbox') }}</li>
      </a>

      <a class=" transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-jolly-dental-orange hover:text-white"
         href="#">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
        <li class="mx-3">{{ __('Services') }}</li>
      </a>


      <a class="transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-jolly-dental-orange hover:text-white"
         href="">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <li class="mx-3">{{ __('Gallery') }}</li>
      </a>


      <section x-data="{subMenu:true}" class="space-y-2">
        <button x-on:click="subMenu = !subMenu"
                class="transition w-full rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-jolly-dental-orange hover:text-white"
                href="">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
          </svg>
          <li class="mx-3">{{ __('Pages') }}</li>
        </button>
        {{--      <section x-show="subMenu" class="pl-20 space-y-4">--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}
        {{--        <p class="hover:font-bold hover:text-jolly-dental-orange">Menu 1</p>--}}

        {{--      </section>--}}

      </section>


      <a href="#"
         class=" transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 text-jolly-dental-text hover:rounded-full hover:bg-jolly-dental-orange hover:text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <li class="mx-3">{{ __('Settings') }}</li>
      </a>
    </ul>
  </nav>
</aside>

{{-- End of Sidebar --}}