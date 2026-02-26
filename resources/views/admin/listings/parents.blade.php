@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Heading -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Parents List</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add Parent
        </button>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-600">

                <!-- Table Head -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Parent</th>
                        <th class="px-6 py-4">Child Name</th>
                        <th class="px-6 py-4">Relation</th>
                        <th class="px-6 py-4">Mobile</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $parents = [
                        ['id'=>1,'name'=>'Rajesh Kumar','child'=>'Rahul Kumar','relation'=>'Father','mobile'=>'9876543210','email'=>'rajesh@gmail.com','status'=>'Active'],
                        ['id'=>2,'name'=>'Sunita Singh','child'=>'Anjali Singh','relation'=>'Mother','mobile'=>'9123456780','email'=>'sunita@gmail.com','status'=>'Active'],
                        ['id'=>3,'name'=>'Mahesh Verma','child'=>'Aman Verma','relation'=>'Guardian','mobile'=>'9988776655','email'=>'mahesh@gmail.com','status'=>'Inactive'],
                    ];
                    @endphp

                    @foreach($parents as $parent)
                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $parent['id'] }}
                        </td>

                        <!-- Parent Info with Avatar -->
                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($parent['name'],0,1)) }}
                            </div>
                            <span>{{ $parent['name'] }}</span>
                        </td>

                        <td class="px-6 py-4">{{ $parent['child'] }}</td>

                        <!-- Relation Badge -->
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                {{ $parent['relation'] }}
                            </span>
                        </td>

                        <td class="px-6 py-4">{{ $parent['mobile'] }}</td>
                        <td class="px-6 py-4">{{ $parent['email'] }}</td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($parent['status'] == 'Active')
                                <span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
                                    Active
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <!-- Action Buttons -->
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
