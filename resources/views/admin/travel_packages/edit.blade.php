<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('EDIT TRAVEL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.travel-packages.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Travel Package Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">

                <form method="POST" action="{{ route('admin.travel-packages.update', $travel_package->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" id="title" name="title" value="{{ $travel_package->title }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Title" required>
                        </div>
                        <div class="mb-6">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Slug</label>
                            <input type="text" id="slug" name="slug" value="{{ $travel_package->slug }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Slug" required>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="mb-6">
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Location</label>
                            <input type="text" id="location" name="location" value="{{ $travel_package->location }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Lokasi" required>
                        </div>

                        <div class="mb-6">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Price</label>
                            <input type="number" id="price" name="price" value="{{ $travel_package->price }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Price" required>
                        </div>
                    </div>

                    <div class="grid">
                        <div class="mb-6">
                            <label for="departure_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Depature
                                Date</label>
                            <input type="date" id="departure_date" name="departure_date" value="{{ $travel_package->departure_date }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="mb-6">
                            <label for="duration"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Duration</label>
                            <input type="text" id="duration" name="duration" value="{{ $travel_package->duration }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Duration" required>
                        </div>
                        <div class="mb-6">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Type</label>
                            <input type="text" id="type" name="type" value="{{ $travel_package->type }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Masukan Type" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="about"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">About</label>
                        <textarea id="about" rows="4" name="about"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan About...">{{ $travel_package->about }}"</textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 justify-end hove:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
