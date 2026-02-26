@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Hostel Rooms</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add Room
        </button>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-600">

                <!-- Table Head -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Room No</th>
                        <th class="px-6 py-4">Room Type</th>
                        <th class="px-6 py-4">Total Beds</th>
                        <th class="px-6 py-4">Occupied</th>
                        <th class="px-6 py-4">Available</th>
                        <th class="px-6 py-4">Monthly Fee</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $rooms = [
                        ['id'=>1,'room'=>'101','type'=>'Single','total'=>1,'occupied'=>1,'fee'=>3000],
                        ['id'=>2,'room'=>'102','type'=>'Double','total'=>2,'occupied'=>1,'fee'=>2500],
                        ['id'=>3,'room'=>'103','type'=>'Triple','total'=>3,'occupied'=>3,'fee'=>2000],
                    ];
                    @endphp

                    @foreach($rooms as $room)
                    @php
                        $available = $room['total'] - $room['occupied'];
                    @endphp

                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $room['id'] }}
                        </td>

                        <td class="px-6 py-4 font-semibold">
                            Room {{ $room['room'] }}
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                {{ $room['type'] }}
                            </span>
                        </td>

                        <td class="px-6 py-4">{{ $room['total'] }}</td>

                        <td class="px-6 py-4 text-red-600 font-semibold">
                            {{ $room['occupied'] }}
                        </td>

                        <td class="px-6 py-4 text-green-600 font-semibold">
                            {{ $available }}
                        </td>

                        <td class="px-6 py-4 font-semibold">
                            ₹ {{ $room['fee'] }}
                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4">
                            @if($available == 0)
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                    Full
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                                    Available
                                </span>
                            @endif
                        </td>

                        <!-- Action -->
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="px-3 py-1 text-xs bg-yellow-400 hover:bg-yellow-500 text-white rounded-lg shadow">
                                    Edit
                                </button>
                                <button class="px-3 py-1 text-xs bg-red-500 hover:bg-red-600 text-white rounded-lg shadow">
                                    Delete
                                </button>
                            </div>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection
