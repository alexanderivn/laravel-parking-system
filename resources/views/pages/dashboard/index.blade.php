<x-app.layout>
	<section>
		<section class="grid lg:grid-cols-3 gap-x-8 gap-y-8">
			<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
				<h5 class="font-medium">Total Parking Space</h5>
				<h1 class="font-bold text-2xl">{{number_format($spot->space ?? '0')}}</h1>
			</section>

			<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
				<h1 class="font-medium ">Total Available</h1>
				<h1 class="font-bold text-2xl">{{number_format($totalAvailable ?? '0')}}</h1>
			</section>

			<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
				<h1 class="font-medium ">Vehicle Parked</h1>
				<h1 class="font-bold text-2xl">{{number_format($parkedVehicles ?? '0')}}</h1>
			</section>

			<section class="text-gray-700 bg-slate-200 shadow-sm p-8 rounded-md">
				<h1 class="font-medium ">Total Income</h1>
				<h1 class="font-bold text-2xl">Rp. {{number_format($income)}}</h1>
			</section>
		</section>

	</section>
</x-app.layout>
