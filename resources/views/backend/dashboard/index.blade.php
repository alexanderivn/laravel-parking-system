<x-dashboard.layout>
  <section class="h-screen">
    <section class="space-y-8 pb-8">
      <section class="grid grid-cols-2 gap-x-8">
        <section class="text-gray-700 bg-red-200 p-8 rounded-md">
          <h5 class="font-medium">Total Parking Space</h5>
          <h1 class="font-bold text-2xl">2500</h1>
        </section>

        <section class="text-gray-700 bg-red-200 p-8 rounded-md">
          <h1 class="font-medium ">Total Available</h1>
          <h1 class="font-bold text-2xl">2500</h1>
        </section>

        <section class="text-gray-700 bg-red-200 p-8 rounded-md">
          <h1 class="font-medium ">Vehicle Parked</h1>
          <h1 class="font-bold text-2xl">{{$totalVehicles}}</h1>
        </section>
      </section>

      <section class="text-gray-700 bg-red-200 p-8 rounded-md space-y-2">
        <label class="block" for="quick_search">Quick Checkout</label>
        <input type="text" class="p-1 rounded-md" placeholder="Parking code" id="quick_search"
               name="quick_search">
      </section>
    </section>

    {{--Parkir Masuk--}}
    <section class="">
      @if(Session::has('success'))
        <section>
          <p>{{Session::get('success')}}</p>
        </section>
      @endif
      <form action="{{route('dashboard.store')}}" method="POST">
        @csrf
        <section class="bg-blue-200 space-y-4 p-8">
          <section>
            <h1>Check In</h1>
          </section>
          <section>
            <label class="block" for="plate_number">Plat Number:</label>
            <input type="text" value="" id="plate_number" class="w-full p-1 rounded-md" name="plate_number">
            @error('plate_number')
            <p>{{$message}}</p>
            @enderror
          </section>
          {{--          <section>--}}
          {{--            <label class="block" for="parking_code">Parking Code:</label>--}}
          {{--            <input type="text" value="" id="parking_code" name="kode_parkir" class="w-full p-1 rounded-md">--}}
          {{--            @error('parking_code')--}}
          {{--            <p>{{$message}}</p>--}}
          {{--            @enderror--}}
          {{--          </section>--}}
          <section>
            <label class="block" for="clock_in">Clock In:</label>
            <input type="datetime-local" value="" name="clock_in" id="clock_in"
                   class="w-full p-1 rounded-md">
            @error('clock_in')
            <p>{{$message}}</p>
            @enderror
          </section>

          {{--          <section class="flex gap-x-8">--}}
          {{--            <section class="bg-yellow-200 p-8 w-full text-center">--}}
          {{--              <section>Print Receipt</section>--}}
          {{--            </section>--}}
          <button onClick="window.print()" class="bg-yellow-200 p-4 w-full text-center">Check In</button>
        </section>
      </form>

      <section class="py-8">
        <div class="overflow-x-auto relative">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">
                Parking Code
              </th>
              <th scope="col" class="py-3 px-6">
                Plat Number
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
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$vehicle->unique_code}}
                </th>
                <td class="py-4 px-6">
                  {{$vehicle->plate_number}}
                </td>
                <td class="py-4 px-6">
                  {{\Carbon\Carbon::parse($vehicle->clock_in)->format('d M Y H:i')}}
                </td>
                <td class="py-4 px-6">
                  {{$vehicle->clock_out}}
                </td>
                <td class="py-4 px-6">
                  {{$vehicle->parking_fee}}
                </td>
                <td>
                  px-6 py-8
                </td>
                <td class="py-4 px-6">
                  <section class="flex gap-x-2">
                    <buttno>Print Code</buttno>
                    <buttno>Edit</buttno>
                    <buttno>Check Out</buttno>
                  </section>
                </td>

              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </section>
      {{--Parkir Masuk end--}}

      {{--      --}}{{--Parkir Keluar--}}
      {{--      <section class="bg-blue-200">--}}
      {{--        <section class="bg-blue-200 space-y-4 p-8">--}}
      {{--          <section>--}}
      {{--            <h1>Check Out</h1>--}}
      {{--          </section>--}}
      {{--          <section>--}}
      {{--            <label class="block" for="no_pol">Input Parking Number</label>--}}
      {{--            <input type="text" value="" id="no_pol" class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}
      {{--          <section>--}}
      {{--            <label class="block" for="no_pol">Plat Number:</label>--}}
      {{--            <input type="text" value="R 7502 ABC" id="no_pol" class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}
      {{--          <section>--}}
      {{--            <label class="block" for="kode_parkir">Parking Code:</label>--}}
      {{--            <input type="text" value="DTX0192" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}
      {{--          <section>--}}
      {{--            <label class="block" for="masuk">Clock In:</label>--}}
      {{--            <input type="datetime-local" value="Monday, 22 Augt 2022, 10:00 AM" name="masuk" id="masuk"--}}
      {{--                   class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}

      {{--          <section>--}}
      {{--            <label class="block" for="masuk">Clock Out:</label>--}}
      {{--            <input type="datetime-local" value="Monday, 22 Augt 2022, 10:00 AM" name="masuk" id="masuk"--}}
      {{--                   class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}

      {{--          <section>--}}
      {{--            <h1>Duration: 3 Hours</h1>--}}
      {{--          </section>--}}

      {{--          <section>--}}
      {{--            <label class="block" for="kode_parkir">Total Bayar:</label>--}}
      {{--            <input type="text" value="Rp.10,000" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}

      {{--          <section>--}}
      {{--            <label class="block" for="kode_parkir">Kembalian:</label>--}}
      {{--            <input type="text" value="Rp. 2,000" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">--}}
      {{--          </section>--}}

      {{--          <section class="bg-yellow-200 p-8 w-full text-center">--}}
      {{--            <section>Open Gate</section>--}}
      {{--          </section>--}}
      {{--        </section>--}}
      {{--      </section>--}}
      {{--      --}}{{--Parkir Keluar end--}}
      {{--    </section>--}}

    </section>
  </section>

  {{--  <div>--}}
  {{--    <h1>Parking system</h1>--}}
  {{--    <h1>SIsa Slot: 1500</h1>--}}
  {{--    <h1>{{Auth::user()->name}}</h1>--}}
  {{--    <h1>{{now()}}</h1>--}}
  {{--    <a href="{{route('dashboard.create')}}"--}}
  {{--       class="">--}}
  {{--      <button class="px-16 py-3 text-center text-gray-700 transition duration-300 rounded-md bg-blue-500 hover:bg-blue-700 hover:font-medium hover:text-gray-700">--}}
  {{--        Create--}}
  {{--      </button>--}}
  {{--    </a>--}}

  {{--    <div>--}}
  {{--      <input type="radio">Car--}}
  {{--      <input type="radio">motorcycle--}}
  {{--    </div>--}}

  {{--    <form>--}}
  {{--      <label for="search">Search Unique Number</label>--}}
  {{--        <input type="text" name="search" id="search" value="{{request('search')}}">--}}

  {{--    </form>--}}
  {{--    <div class="py-24">--}}
  {{--      @foreach($vehicles as $vehicle)--}}
  {{--        @php--}}
  {{--          $timeIn = \Carbon\Carbon::parse($vehicle->created_at);--}}
  {{--          $timeOut   = \Carbon\Carbon::parse(now());--}}
  {{--            $mins   = $timeOut->diffInMinutes($timeIn);--}}
  {{--            $rate = 3000;--}}
  {{--          $total = 0;--}}

  {{--            if ($mins/60 < 1)--}}
  {{--            {--}}
  {{--  $total = $rate;--}}
  {{--            }else{--}}
  {{--                $total = $mins/60 * $rate;--}}
  {{--            }--}}
  {{--        @endphp--}}
  {{--        --}}{{--        @dump($hours)--}}
  {{--        <h1>Police Number: {{$vehicle->plate_number}}</h1>--}}
  {{--        <p>Parking Code: {{$vehicle->unique_code}}</p>--}}
  {{--        <p>Clock In: {{\Carbon\Carbon::parse($vehicle->created_at)->format('d M Y H:i')}}</p>--}}
  {{--        <p>Parking Duration: {{$vehicle->created_at->diffForHumans(null, true, true, 2)}}</p>--}}
  {{--        <p>Total: Rp.{{number_format($total)}}</p>--}}
  {{--      @endforeach()--}}
  {{--    </div>--}}


  {{--    <form action="{{route('logout')}}" method="POST">--}}
  {{--      @csrf--}}
  {{--      <button type="submit"--}}
  {{--              class="px-16 py-3 text-center text-gray-700 transition duration-300 rounded-md bg-blue-500 hover:bg-blue-700 hover:font-medium hover:text-gray-700">--}}
  {{--        Logout--}}
  {{--      </button>--}}
  {{--    </form>--}}
  {{--  </div>--}}
</x-dashboard.layout>