<x-app.layout>
  <section class="container mx-auto w-1/2">
    <section>
      <form action="{{route('parking-check-out.store', $vehicle)}}" method="POST">
        @csrf
        @method('PATCH')
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

            <h5>{{$vehicle->ticket->clock_out}}</h5>
          </section>

          <section class="flex justify-between">
            <h5>Parking Fee:</h5>

            <h5>Rp. {{number_format($vehicle->ticket->parking_fee)}}</h5>
          </section>

        </section>
      </form>
    </section>
  </section>
</x-app.layout>
