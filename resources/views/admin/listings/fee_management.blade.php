@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Fee Management</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Collect Fee
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
                        <th class="px-6 py-4">Student</th>
                        <th class="px-6 py-4">Class</th>
                        <th class="px-6 py-4">Total Fee</th>
                        <th class="px-6 py-4">Paid</th>
                        <th class="px-6 py-4">Due</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $fees = [
                        ['id'=>1,'name'=>'Rahul Kumar','class'=>'10th','total'=>15000,'paid'=>15000],
                        ['id'=>2,'name'=>'Anjali Singh','class'=>'9th','total'=>12000,'paid'=>8000],
                        ['id'=>3,'name'=>'Aman Verma','class'=>'8th','total'=>10000,'paid'=>0],
                    ];
                    @endphp

                    @foreach($fees as $fee)

                    @php
                        $due = $fee['total'] - $fee['paid'];
                    @endphp

                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $fee['id'] }}
                        </td>

                        <!-- Student Info -->
                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($fee['name'],0,1)) }}
                            </div>
                            <span>{{ $fee['name'] }}</span>
                        </td>

                        <td class="px-6 py-4">{{ $fee['class'] }}</td>

                        <td class="px-6 py-4 font-semibold text-gray-800">
                            ₹ {{ number_format($fee['total']) }}
                        </td>

                        <td class="px-6 py-4 text-green-600 font-semibold">
                            ₹ {{ number_format($fee['paid']) }}
                        </td>

                        <td class="px-6 py-4 text-red-600 font-semibold">
                            ₹ {{ number_format($due) }}
                        </td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($due == 0)
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                                    Paid
                                </span>
                            @elseif($fee['paid'] == 0)
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                    Unpaid
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-yellow-100 text-yellow-700 rounded-full">
                                    Partial
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
