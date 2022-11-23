{{-- Header --}}
<section class="flex flex-1 flex-col overflow-hidden ">
  <header class=" bg-white px-6 py-4  shadow-xl ">
    <section class="container mx-auto flex items-center justify-between">
      <section class="flex items-center">
        <button class="text-gray-500 focus:outline-none lg:hidden" @click="sidebarOpen = true">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>
        </button>

      </section>

      <section class="flex items-center">

        <section class="flex cursor-pointer items-center" x-data="{ dropdownOpen: false }">
          <section class="">
            <button class="relative block h-8 w-8 overflow-hidden rounded-full shadow focus:outline-none"
                    @click="dropdownOpen = ! dropdownOpen">
              <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="h-full w-full object-cover"
                   alt="avatar" />
            </button>

            <section class="fixed inset-0 z-10 h-full w-full" x-show="dropdownOpen"
                     @click="dropdownOpen = false"></section>

            <section class="absolute right-2 z-10 mt-2 w-64 overflow-hidden rounded-md bg-white shadow-xl" x-cloak
                     x-show="dropdownOpen">
              <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-jolly-dental-orange hover:text-white"
                 href="">{{ __('Profile') }}</a>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button
                    class="flex min-w-full justify-start px-4 py-2 text-sm text-gray-700 hover:bg-jolly-dental-orange hover:text-white">
                  Logout
                </button>
              </form>
            </section>
          </section>
          <section class="px-2" @click="dropdownOpen = ! dropdownOpen">
            <p></p>
          </section>
        </section>
      </section>
    </section>
  </header>
  {{-- End of Header --}}

  {{-- Main Content --}}
  <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-50">
    <section class="min-w-screen px-6 py-8 3xl:px-0 container mx-auto">
      {{$content}}
    </section>
  </main>
  {{-- Main Content --}}
</section>
{{-- Header End--}}
