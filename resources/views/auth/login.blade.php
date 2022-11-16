<x-app.layout>
  <section class="grid h-screen px-4 lg:grid-cols-2 bg-red-200">
    <section class="h-auto m-auto">
      <h1 class="text-4xl font-bold text-white">Parking System</h1>
    </section>

    <form action="#" class="h-auto px-8 py-8 m-auto space-y-8 bg-white rounded-lg lg:w-3/4"
          method="POST">
      @csrf
      {{-- Too many login notification --}}
      @if (session('error'))
        <section class="p-4 bg-red-200 rounded-lg">
          <p class="font-medium text-pyxel-red">{{ session('error') }}</p>
        </section>
      @endif
      {{-- Too many login notification end --}}
      <section class="space-y-2">
        <label for="email" class="block text-pyxel-text">Email</label>
        <input type="email" id="email" name="email"
               class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-pyxel-indigo focus:ring-1 focus:ring-pyxel-indigo">
        @error('email')
        <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror
      </section>
      <section class="space-y-2">
        <label for="password" class="block text-pyxel-text">Password</label>
        <input type="password" id="password" name="password"
               class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-pyxel-indigo focus:ring-1 focus:ring-pyxel-indigo">
        @error('password')
        <p class="text-xs text-red-500">{{ $message }}</p>
        @enderror
      </section>
      <section class="flex items-center justify-between">
        <section class="space-y-2">
          <label for="remember" class="flex items-center gap-2 text-xs text-pyxel-text">Stay logged
            in
            <input type="checkbox" id="remember" name="remember">
          </label>
        </section>
        <section class="space-y-2">
          <a href="#" class="text-xs underline">Forgot Login</a>
        </section>
      </section>
      <section class="w-full">
        <button type="submit"
                class="w-full px-16 py-3 text-center text-white transition duration-300 rounded-full bg-pyxel-red hover:bg-pyxel-indigo hover:font-medium hover:text-white">Login</button>
      </section>
    </form>
  </section>
</x-app.layout>