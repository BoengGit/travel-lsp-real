<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('GALLERIES ADD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.galleries.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Galleries Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">

                <form method="POST" action="{{ route('admin.galleries.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                        <input type="file" id="image" name="image"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div class="sm:col-span-6 pt-6">
                        <label for="travel_packages_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Travel
                            Packages</label>
                        <div class="mt-1">
                            <select name="travel_packages_id" id="travel_packages_id"
                                class="form-multiselect block w-full mt-1">
                                @foreach ($travel_packages as $travel_package)
                                    <option value="{{ $travel_package->id }}">
                                        {{ $travel_package->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end mt-5">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 justify-end hove:bg-indigo-700 rounded-lg text-white">Store</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
