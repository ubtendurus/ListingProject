<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('listings.create') }}" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('Add New List') }}</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th scope="col" colspan="2" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($listings as $listing)
                            <tr class="bg-emerald-200">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $listing -> title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $listing -> description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${{ $listing -> price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('listings.edit', $listing) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('Edit') }}</a>
                            </td>
                                <td>
                                <form method="post" action="{{ route('listings.destroy', $listing) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-jet-danger-button type="submit">
                                        {{ __('Delete') }}</x-jet-danger-button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
