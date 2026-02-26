@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Schools List</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add School
        </button>
    </div>

    <!-- Schools Grid -->
    <div class="grid md:grid-cols-3 gap-6">

        @php
        $schools = [
            [
                'name'=>'Bright Future School',
                'city'=>'Patna',
                'students'=>450,
                'teachers'=>35,
                'status'=>'Active'
            ],
            [
                'name'=>'Sunrise Public School',
                'city'=>'Delhi',
                'students'=>320,
                'teachers'=>28,
                'status'=>'Active'
            ],
            [
                'name'=>'Green Valley School',
                'city'=>'Ranchi',
                'students'=>280,
                'teachers'=>22,
                'status'=>'Inactive'
            ],
        ];
        @endphp

        @foreach($schools as $school)
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition duration-300">

            <!-- School Header -->
            <div class="flex items-center gap-4 mb-4">
                <div class="w-14 h-14 rounded-xl bg-[#133860] text-white flex items-center justify-center text-lg font-bold">
                    {{ strtoupper(substr($school['name'],0,1)) }}
                </div>

                <div>
                    <h3 class="font-bold text-lg text-gray-800">
                        {{ $school['name'] }}
                    </h3>
                    <p class="text-gray-500 text-sm">
                        {{ $school['city'] }}
                    </p>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                <div class="bg-gray-50 p-3 rounded-lg">
                    <p class="text-gray-500">Students</p>
                    <p class="font-semibold text-gray-800">
                        {{ $school['students'] }}
                    </p>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg">
                    <p class="text-gray-500">Teachers</p>
                    <p class="font-semibold text-gray-800">
                        {{ $school['teachers'] }}
                    </p>
                </div>
            </div>

            <!-- Status -->
            <div class="mb-4">
                @if($school['status'] == 'Active')
                    <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                        Active
                    </span>
                @else
                    <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                        Inactive
                    </span>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-2">
                <button class="flex-1 bg-[#133860] text-white py-2 rounded-lg hover:bg-blue-900 text-sm">
                    Manage
                </button>

                <button class="flex-1 bg-yellow-400 text-white py-2 rounded-lg hover:bg-yellow-500 text-sm">
                    Edit
                </button>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection
