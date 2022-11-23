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

        <section class="space-y-2 space-x-2">
          <a href="{{route('parking-check-in.index')}}">
            <button type="submit" class=" rounded-md px-4 py-2 bg-blue-500 text-white">Add Another</button>
          </a>
          <button class=" rounded-md px-4 py-2 bg-orange-500 text-white">Print Ticket</button>
        </section>


      </section>

    </section>
  </section>
</x-app.layout>
