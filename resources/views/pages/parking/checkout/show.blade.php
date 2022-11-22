<x-app.layout>
	<section class="container mx-auto w-1/2">
		<section>

			<section class="flex flex-col">
				<img src="data:image/png;base64,{{DNS1D::getBarcodePNG($vehicle->ticket->parking_code, 'PHARMA')}}"
				     alt="barcode" class="" />
				<h1 class="text-center">{{$vehicle->ticket->parking_code}}</h1>
			</section>
			
			<section class="space-y-4 pt-8">
				<section class="flex justify-between">
					<h5>Vehicle Number</h5>
					<h5>{{$vehicle->vehicle_number}}</h5>
				</section>

				<section class="flex justify-between">
					<h5>Clock in:</h5>
					<h5>{{$vehicle->ticket->clock_in}}</h5>
				</section>

				<section class="flex justify-between">
					<h5>Clock Out:</h5>
					<h5>{{\Carbon\Carbon::now()}}</h5>
				</section>

				<section class="flex justify-between">
					<h5>Parking Fee:</h5>
					<h5>{{\App\Services\ParkingService::calculateFee($vehicle->ticket->clock_in)}}</h5>
				</section>

				<section class="flex justify-between items-center">
					<label for="pay_amount" class="">Pay Amount:</label>
					<input type="text" id="pay_amount" name="pay_amount">
				</section>

				<section class="flex justify-between items-center">
					<label for="changes" class="">Pay Changes:</label>
					<input type="text" id="changes" name="changes"
					       value="{{\App\Services\ParkingService::calculateFee($vehicle->ticket->clock_in) - 5000}}">
				</section>

				<section class="flex justify-between items-center">
					<label for="pay_amount" class="">Total:</label>
					<input type="text" id="pay_amount" name="pay_amount">
				</section>


				<button class="px-4 py-2 bg-green-500 text-white">Check Out</button>


			</section>
		</section>
	</section>
</x-app.layout>
