<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-300">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-xs uppercase bg-gray-200 text-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">No</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Grade</th>
                    <th scope="col" class="px-6 py-3">Department</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition ease-in-out duration-150">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                        {{$student->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$student->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$student->grade->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$student->grade->department->name}}

                    </td>
                    <td class="px-6 py-4">
                        {{$student->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$student->adress}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-admin>
