<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('TRANSACTION EDIT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.transactions.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Transaction Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">

                <form method="POST" action="{{ route('admin.transactions.update', $transaction->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="sm:col-span-6 pt-6">
                        <label for="transaction_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Pemesan</label>
                        <div class="mt-1">
                            <input type="text" disabled value="{{ $transaction->user->name }}">
                        </div>
                    </div>

                    <div class="sm:col-span-6 pt-6">
                        <label for="transaction_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Edit Status</label>
                        <div class="mt-1">
                            <select name="transaction_status" id="transaction_status"
                                class="form-multiselect block w-full mt-1">
                                <option value="{{ $transaction->transaction_status }}">Default</option>
                                <option value="PENDING">Pending</option>
                                <option value="SUCCESS">Success</option>
                                <option value="CANCEL">Cancel</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end mt-5">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 justify-end hove:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-admin-layout>
