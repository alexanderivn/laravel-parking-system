<div>
  <section class="py-8 space-y-8">
    <section class="flex justify-between">
      <section>
        <label for="search"></label>
        <input wire:model="search" type="text" name="search" id="search" class="rounded-md"
               placeholder="Search parking number">
      </section>
      <section class="flex gap-x-4">

        <section>
          <label for="per_page"></label>
          <select wire:model="perPage" id="per_page" name="per_page" class="rounded-md">
            <option>15</option>
            <option>50</option>
            <option>100</option>
          </select>
        </section>

      </section>
    </section>
    <section class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-slate-200 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Parking Code
          </th>
          <th scope="col" class="py-3 px-6">
            Vehicle Number
          </th>
          <th scope="col" class="py-3 px-6">
            Clock In
          </th>
          <th scope="col" class="py-3 px-6">
            Clock Out
          </th>
          <th scope="col" class="py-3 px-6">
            Parking Fee
          </th>
          <th scope="col" class="py-3 px-6">
            Option
          </th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
          @if(!$vehicle->ticket->clock_out)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row"
                  class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="{{route('parking-check-out.show', $vehicle)}}"> {{$vehicle->ticket->parking_code}}</a>
              </th>
              <td class="py-4 px-6">
                {{$vehicle->vehicle_number}}
              </td>
              <td class="py-4 px-6">
                {{\Carbon\Carbon::parse($vehicle->ticket->clock_in)->format('d M Y H:i')}}
              </td>
              <td class="py-4 px-6">
                @if(empty($vehicle->ticket->clock_out))
                  -
                @else
                  {{\Carbon\Carbon::parse($vehicle->ticket->clock_out)->format('d M Y H:i')}}
                @endif
              </td>
              <td class="py-4 px-6">
                Rp. {{number_format(\App\Services\ParkingService::calculateFee($vehicle->ticket->clock_in))}}
              </td>
              <td class="py-4 px-6 text-white">
                <section class="flex gap-x-2">
                  <a href="{{route('parking-check-out.show', $vehicle)}}">
                    <button class="bg-green-500 p-2 rounded-md">Check Out</button>
                  </a>
                </section>
              </td>
            </tr>
          @endif
        @endforeach
        </tbody>
      </table>
    </section>
  </section>
  {{$vehicles->links()}}
</div>
