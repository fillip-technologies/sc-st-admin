@extends('admin.include.layout')

@section('content')

<div class="p-6">


    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Users List</h1>
        <a href="{{ route('create.user') }}" class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add users
        </a>
    </div>


    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-600">

                <!-- Table Head -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Phone</th>
                        <th class="px-6 py-4">Role</th>
                        <th class="px-6 py-4">Address</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $users = [
                        ['id'=>1,'name'=>'Rahul Kumar','roll'=>101,'class'=>'10th','mobile'=>'9876543210','status'=>'Active'],
                        ['id'=>2,'name'=>'Anjali Singh','roll'=>102,'class'=>'9th','mobile'=>'9123456780','status'=>'Inactive'],
                        ['id'=>3,'name'=>'Aman Verma','roll'=>103,'class'=>'8th','mobile'=>'9988776655','status'=>'Active'],
                    ];
                    @endphp

                    @foreach($users as $key=> $user)
                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $key + 1  }}
                        </td>


                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($user['name'],0,1)) }}
                            </div>
                            <span>{{ $user['name'] }}</span>
                        </td>

                        <td class="px-6 py-4">{{ $user['roll'] }}</td>
                        <td class="px-6 py-4">{{ $user['class'] }}</td>
                        <td class="px-6 py-4">{{ $user['mobile'] }}</td>


                        <td class="px-6 py-4">
                            @if($user['status'] == 'Active')
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
