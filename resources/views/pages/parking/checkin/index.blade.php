<x-app.layout>
  <section class="h-screen">
    <section class="space-y-8 pb-8">
      <section class="grid lg:grid-cols-3 gap-x-8 gap-y-8">
        <x-card>
          <x-slot:title>Total Space</x-slot:title>
          <x-slot:content>{{number_format($spot->space ?? '0')}}</x-slot:content>
        </x-card>

        <x-card>
          <x-slot:title>Total Available</x-slot:title>
          <x-slot:content>{{number_format($totalAvailable ?? '0')}}</x-slot:content>
        </x-card>

        <x-card>
          <x-slot:title>Total Parked</x-slot:title>
          <x-slot:content>{{number_format($parkedVehicles ?? '0')}}</x-slot:content>
        </x-card>

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
            <x-input-label for="vehicle_number" label="Vehicle Number: " />
            <x-input-group for="vehicle_number" name="vehicle_number" type="text" error="vehicle_number"
                           id="vehicle_number" />
          </section>

          <section class="space-y-2">
            <x-input-label for="clock_in" label="Clock In: " />
            <x-input-group for="clock_in" name="clock_in" type="datetime-local" error="clock_in"
                           id="clock_in" />

          </section>

          <x-button-large />

        </section>
      </form>

    </section>
  </section>

</x-app.layout>
