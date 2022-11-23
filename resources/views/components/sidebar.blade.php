{{-- Sidebar --}}

<section x-cloak class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"
         :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"></section>

<aside
		class="shadow-lg fixed inset-y-0 left-0 z-30 w-64 transform overflow-y-auto bg-white transition duration-300 lg:static lg:inset-0 lg:translate-x-0"
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
			@role('Admin')
			<a class="@if(Route::is('dashboard.index')) bg-blue-500 text-white @endif transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 hover:rounded-full hover:bg-blue-600 hover:text-white"
			   href="{{route('dashboard.index')}}">
				<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
				     xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					      d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
					</path>
				</svg>
				<li class="mx-3">{{ __('Dashboard') }}</li>
			</a>

			<a href="{{route('report.index')}}"
			   class=" transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 hover:rounded-full hover:bg-blue-600 hover:text-white">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					      d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
				</svg>
				<li class="mx-3">{{ __('Report') }}</li>
			</a>
			@endrole

			{{--      <a class="@if(Route::is('parking.index')) bg-blue-500 text-white @endif transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 hover:rounded-full hover:bg-jolly-dental-orange hover:text-white"--}}
			{{--         href="{{route('parking.index')}}">--}}
			{{--        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
			{{--          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
			{{--                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>--}}
			{{--        </svg>--}}
			{{--        <li class="mx-3">{{ __('Parking') }}</li>--}}
			{{--      </a>--}}

			<section x-data="{subMenu:$persist(0)}" class="space-y-2">
				<button x-on:click="subMenu = !subMenu"
				        class=" transition w-full rounded-full duration-300 mt-4 flex items-center px-6 py-2 hover:rounded-full hover:bg-blue-500 hover:text-white">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
					</svg>
					<li class="mx-3">{{ __('Parking') }}</li>
				</button>
				<nav x-cloak x-show="subMenu" class="pl-20 space-y-4">
					<ul>
						<a href="{{route('parking-check-in.index')}}">
							<li class="hover:font-bold hover:text-blue-500">Check In</li>
						</a>
					</ul>

					<ul>
						<a href="{{route('parking-check-out.index')}}">
							<li class="hover:font-bold hover:text-blue-500">Check Out</li>
						</a>
					</ul>

					@role('Admin')
					<ul>
						<a href="{{route('parking-check-out.index')}}">
							<li class="hover:font-bold hover:text-blue-500">Parking Setting</li>
						</a>
					</ul>
					@endrole

				</nav>

			</section>


			@role('Admin')
			<a href="#"
			   class=" transition rounded-full duration-300 mt-4 flex items-center px-6 py-2 hover:rounded-full hover:bg-blue-500 hover:text-white">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
				     xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
				</svg>
				<li class="mx-3">{{ __('Settings') }}</li>
			</a>
			@endrole
		</ul>
	</nav>
</aside>

{{-- End of Sidebar --}}
