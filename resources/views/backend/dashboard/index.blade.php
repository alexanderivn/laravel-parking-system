<x-dashboard.layout>

  <section class="h-screen">
    {{--Header and nav--}}
    <section class="container mx-auto">
      <header class="flex gap-x-10 items-center py-4 text-gray-700">
        <h1 class="font-bold text-xl">Hi, {{Auth::user()->name}}</h1>

      </header>
    </section>
    {{--Header and nav end--}}

    <section class="container mx-auto pb-4">
      <section class="w-full text-center space-y-4 text-gray-700">
        <h1 class="font-bold">Spot Kosong: 2546</h1>
      </section>
    </section>

    {{--Parkir Masuk--}}
    <section class="grid grid-cols-2 gap-x-4">
      <section class="bg-blue-200 space-y-4 p-8">
        <section>
          <h1>Parkir Masuk</h1>
        </section>
        <section>
          <label class="block" for="no_pol">No Polisi</label>
          <input type="text" value="R 7502 ABC" id="no_pol" class="w-full p-1 rounded-md">
        </section>
        <section>
          <label class="block" for="kode_parkir">Kode Parkir</label>
          <input type="text" value="DTX0192" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">
        </section>
        <section>
          <label class="block" for="masuk">Jam Masuk</label>
          <input type="datetime-local" value="Monday, 22 Augt 2022, 10:00 AM" name="masuk" id="masuk"
                 class="w-full p-1 rounded-md">
        </section>

        <section class="flex gap-x-8">
          <section class="bg-yellow-200 p-8">
            <section>Mobil</section>
          </section>
          <section class="bg-yellow-200 p-8">
            <section>Motor</section>
          </section>
          <section class="bg-yellow-200 p-8 w-full text-center">
            <section>Masuk</section>
          </section>
        </section>
      </section>
      {{--Parkir Masuk end--}}

      {{--Parkir Keluar--}}
      <section class="bg-blue-200">
        <section class="bg-blue-200 space-y-4 p-8">
          <section>
            <h1>Parkir Masuk</h1>
          </section>
          <section>
            <label class="block" for="no_pol">No Polisi</label>
            <input type="text" value="R 7502 ABC" id="no_pol" class="w-full p-1 rounded-md">
          </section>
          <section>
            <label class="block" for="kode_parkir">Kode Parkir</label>
            <input type="text" value="DTX0192" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">
          </section>
          <section>
            <label class="block" for="masuk">Jam Masuk</label>
            <input type="datetime-local" value="Monday, 22 Augt 2022, 10:00 AM" name="masuk" id="masuk"
                   class="w-full p-1 rounded-md">
          </section>

          <section>
            <label class="block" for="kode_parkir">Total Bayar:</label>
            <input type="text" value="Rp.10,000" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">
          </section>

          <section>
            <label class="block" for="kode_parkir">Kembalian:</label>
            <input type="text" value="Rp. 2,000" id="kode_parkir" name="kode_parkir" class="w-full p-1 rounded-md">
          </section>

          <section class="bg-yellow-200 p-8 w-full text-center">
            <section>Masuk</section>
          </section>
        </section>
      </section>
      {{--Parkir Keluar end--}}
    </section>

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
  {{--          $mins   = $timeOut->diffInMinutes($timeIn);--}}
  {{--          $rate = 3000;--}}
  {{--          $total = 0;--}}

  {{--          if ($mins/60 < 1)--}}
  {{--          {--}}
  {{--$total = $rate;--}}
  {{--          }else{--}}
  {{--              $total = $mins/60 * $rate;--}}
  {{--          }--}}
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