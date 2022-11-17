<x-dashboard.layout>

  <section class="h-screen">
    {{--Header and nav--}}
    <section class="container mx-auto">
      <header class="flex gap-x-10 items-center py-4 text-gray-700">
        <h1 class="font-bold text-xl">Hi, {{Auth::user()->name}}</h1>

      </header>
    </section>
    {{--Header and nav end--}}

    <section class="container mx-auto">
      <section class="w-full text-center space-y-4 text-gray-700">
        <label class="block" for="search">Input Kode Parkir</label>
        <input type="text" name="search" id="search" class="w-full text-black">
      </section>
    </section>

    <section>
      <section class="text-gray-700">
        <label for="type">MASUK</label>
        <input type="radio" id="type">
      </section>
      <section class="text-gray-700">
        <label for="type">KELUAR</label>
        <input type="radio" id="type">
      </section>
    </section>

    <section class="pt-8 container mx-auto">
      <section class="bg-red-200 space-y-4">
        <section>
          <label class="block" for="no_pol">No Polisi</label>
          <input type="text" value="R 7502 ABC" id="no_pol">
        </section>

        <section>
          <label class="block" for="kode_parkir">Kode Parkir</label>
          <input type="text" value="DTX0192" id="kode_parkir" name="kode_parkir">
        </section>

        <section>
          <label class="block" for="masuk">Jam Masuk</label>
          <input type="text" value="Monday, 22 Augt 2022, 10:00 AM" class="" name="masuk" id="masuk">
        </section>

        <section>
          <label class="block" for="masuk">Jam Keluar</label>
          <input type="text" value="Monday, 22 Augt 2022, 10:00 AM" class="" name="masuk" id="masuk">
        </section>
      </section>

      <section class="text-gray-700">
        <h1>Lama Parkir: 6 Jam</h1>
        <h1>Subtotal: 7500</h1>
        <h1>Bayar: 8000</h1>
        <h1>Change: 500</h1>
        <section>
          <button class="bg-red-200 px-4 py-21">Open Gate</button>
        </section>
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