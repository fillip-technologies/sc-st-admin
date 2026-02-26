@extends('admin.include.layout')

@section('title', 'Notice Board')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Notice Board</h1>
            <p class="text-sm text-gray-500">All School Announcements & Updates</p>
        </div>

        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
            + Add Notice
        </a>
    </div>

    <!-- Notice Table -->
    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody>

                <!-- Static Demo Data -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        Annual Sports Day
                    </td>
                    <td class="px-6 py-4">
                        Sports day will be held on 20th March in school ground.
                    </td>
                    <td class="px-6 py-4">
                        10 Mar 2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>

                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        Holiday Notice
                    </td>
                    <td class="px-6 py-4">
                        School will remain closed on account of Holi festival.
                    </td>
                    <td class="px-6 py-4">
                        14 Mar 2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs">
                            Upcoming
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">3</td>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        Exam Schedule
                    </td>
                    <td class="px-6 py-4">
                        Final exam schedule uploaded on student portal.
                    </td>
                    <td class="px-6 py-4">
                        18 Mar 2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs">
                            Expired
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection
