<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-200">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-xs uppercase bg-gray-200 text-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 border-b border-gray-200 transition ease-in-out duration-150">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $department->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $department->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $department->desc }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
