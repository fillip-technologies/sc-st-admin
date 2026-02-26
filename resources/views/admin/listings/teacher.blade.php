@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Teachers List</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add Teacher
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
                        <th class="px-6 py-4">Teacher</th>
                        <th class="px-6 py-4">Subject</th>
                        <th class="px-6 py-4">Qualification</th>
                        <th class="px-6 py-4">Mobile</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $teachers = [
                        [
                            'id'=>1,
                            'name'=>'Ravi Sharma',
                            'subject'=>'Mathematics',
                            'qualification'=>'M.Sc (Math)',
                            'mobile'=>'9876543210',
                            'email'=>'ravi@gmail.com',
                            'status'=>'Active'
                        ],
                        [
                            'id'=>2,
                            'name'=>'Neha Singh',
                            'subject'=>'Science',
                            'qualification'=>'M.Sc (Physics)',
                            'mobile'=>'9123456780',
                            'email'=>'neha@gmail.com',
                            'status'=>'Active'
                        ],
                        [
                            'id'=>3,
                            'name'=>'Amit Verma',
                            'subject'=>'English',
                            'qualification'=>'M.A (English)',
                            'mobile'=>'9988776655',
                            'email'=>'amit@gmail.com',
                            'status'=>'Inactive'
                        ],
                    ];
                    @endphp

                    @foreach($teachers as $teacher)

                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $teacher['id'] }}
                        </td>

                        <!-- Teacher Info with Avatar -->
                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($teacher['name'],0,1)) }}
                            </div>
                            <span class="font-medium text-gray-800">
                                {{ $teacher['name'] }}
                            </span>
                        </td>

                        <!-- Subject Badge -->
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                {{ $teacher['subject'] }}
                            </span>
                        </td>

                        <td class="px-6 py-4">{{ $teacher['qualification'] }}</td>
                        <td class="px-6 py-4">{{ $teacher['mobile'] }}</td>
                        <td class="px-6 py-4 text-blue-600">{{ $teacher['email'] }}</td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($teacher['status'] == 'Active')
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                                    Active
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <!-- Action Buttons -->
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="px-3 py-1 text-xs bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow">
                                    View
                                </button>
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
