<x-app.layout>
	<section>
		<section>
			<h1>Barcode</h1>
			@if(Session::has('success'))
				<section>
					<p>{{Session::get('success')}}</p>
				</section>
			@endif

			{{--        <style>--}}
			{{--            body {--}}
			{{--                visibility: hidden;--}}
			{{--            }--}}

			{{--            .print {--}}
			{{--                visibility: visible;--}}
			{{--            }--}}
			{{--        </style>--}}

			<section class="print" id="print">
				<section class="flex flex-col justify-center">

					<img src="data:image/png;base64,{{DNS2D::getBarcodePNG($vehicle->ticket->parking_code, 'PDF417')}}"
					     alt="barcode" class="w-96" />
					<h1>{{$vehicle->ticket->parking_code}}</h1>
				</section>

				<section>
					<h1>Vehicle Number: {{$vehicle->vehicle_number}}</h1>
					<h1>Clock in: {{$vehicle->ticket->clock_in}}</h1>
					<button class="px-4 py-2 bg-green-500 text-white">Check Out</button>
				</section>
			</section>
		</section>
	</section>
</x-app.layout>
