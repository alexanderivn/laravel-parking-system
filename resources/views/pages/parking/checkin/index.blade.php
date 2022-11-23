<x-app.layout>
	<section class="h-screen">
		<section class="space-y-8 pb-8">
			<section class="grid lg:grid-cols-3 gap-x-8 gap-y-8">
				<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
					<h5 class="font-medium">Total Parking Space</h5>
					<h1 class="font-bold text-2xl">{{$spot->space ?? '0'}}</h1>
				</section>

				<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
					<h1 class="font-medium ">Total Available</h1>
					<h1 class="font-bold text-2xl">{{$totalAvailable ?? '0'}}</h1>
				</section>

				<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
					<h1 class="font-medium ">Vehicle Parked</h1>
					<h1 class="font-bold text-2xl">{{$parkedVehicles ?? '0'}}</h1>
				</section>
			</section>
		</section>

		<section class="">
			<form action="{{route('parking-check-in.store')}}" method="POST">
				@csrf
				<section class="bg-slate-200 shadow-sm space-y-4 p-8 rounded-md">
					<section>
						<h1 class="font-bold text-2xl">Check In</h1>
					</section>
					<section class="space-y-2">
						<label class="block" for="vehicle_number">Vehicle Number</label>
						<input type="text" value="" id="vehicle_number" class="w-full p-1 rounded-md"
						       name="vehicle_number">
						@error('vehicle_number')
						<p>{{$message}}</p>
						@enderror
					</section>

					<section class="space-y-2">
						<label class="block" for="clock_in">Clock In:</label>
						<input type="datetime-local" value="" name="clock_in" id="clock_in"
						       class="w-full p-1 rounded-md">
						@error('clock_in')
						<p>{{$message}}</p>
						@enderror
					</section>

					<button type="submit" class="bg-blue-500 text-white rounded-md p-4 w-full text-center">Check In</button>

				</section>
			</form>

		</section>
	</section>

</x-app.layout>
