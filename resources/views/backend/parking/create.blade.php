<x-app.layout>
  <section>
    <h1>Create</h1>
    <form action="{{route('parking.store')}}" method="POST">
      @csrf
      <label for="plate_number">Plate Number</label>
      <input type="text" name="plate_number" id="plate_number">
      <label for="clock_in">Tanggal</label>
      <input type="datetime-local" name="clock_in" id="clock_in">

      <button type="submit">Park</button>
    </form>
  </section>
  <a href="{{route('parking.index')}}">
    <button class="px-16 py-3 text-center text-white transition duration-300 rounded-md bg-blue-500 hover:bg-blue-700 hover:font-medium hover:text-white">
      Back
    </button>
  </a>
</x-app.layout>