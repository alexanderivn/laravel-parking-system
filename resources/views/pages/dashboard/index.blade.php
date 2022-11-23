<x-app.layout>
  <section>
    <section class="grid lg:grid-cols-3 gap-x-8 gap-y-8">
      <x-card>
        <x-slot:title>Total Space</x-slot:title>
        <x-slot:content>{{number_format($spot->space ?? '0')}}</x-slot:content>
      </x-card>

      <x-card>
        <x-slot:title>Space Available</x-slot:title>
        <x-slot:content>{{number_format($totalAvailable ?? '0')}}</x-slot:content>
      </x-card>

      <x-card>
        <x-slot:title>Total Parked</x-slot:title>
        <x-slot:content>{{number_format($parkedVehicles ?? '0')}}</x-slot:content>
      </x-card>

      <x-card>
        <x-slot:title>Total Income</x-slot:title>
        <x-slot:content>Rp. {{number_format($income ?? '0')}}</x-slot:content>
      </x-card>
    </section>

  </section>
</x-app.layout>
