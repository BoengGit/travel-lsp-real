<x-master_home-layout>

    <section>
        <div>
            <h1>Langsung Pesan dengan mengklik tombol yang ditentukan</h1>
        </div>


        <form action="{{ route('checkout_success', $item->id) }}" method="POST">
            @csrf
            <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large
                input</label>
            <input type="number" id="large-input" name="quantity"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mt-8">
            <button type="submit"
                class="bg-slate-800 hover:bg-slate-900 mt-3 p-3 text-white rounded-full">
                Langsung bayar
            </button>
        </div>
        </form>
        {{-- <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large
                input</label>
            <input type="number" id="large-input" name="quantity"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mt-8">
            <a href="{{ route('checkout_success', $item->id) }}"
                class="bg-slate-800 hover:bg-slate-900 mt-3 p-3 text-white rounded-full">
                Langsung bayar
            </a>
        </div> --}}
        <div class="mt-8">
            <a href="{{ route('detail', $item->travel_package->slug) }}"
                class="bg-slate-800 hover:bg-slate-900 mt-3 p-3 text-white rounded-full">
                Cancel Booking
            </a>
        </div>


    </section>
</x-master_home-layout>
