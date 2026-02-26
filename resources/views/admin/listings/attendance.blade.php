@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Student Attendance</h1>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow mb-6 border border-gray-100">
        <div class="grid md:grid-cols-3 gap-4">

            <div>
                <label class="text-sm text-gray-600">Select Date</label>
                <input type="date" class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="text-sm text-gray-600">Select Class</label>
                <select class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
                    <option>10th</option>
                    <option>9th</option>
                    <option>8th</option>
                </select>
            </div>

            <div class="flex items-end">
                <button class="bg-[#133860] text-white px-4 py-2 rounded-lg w-full hover:bg-blue-900">
                    Filter
                </button>
            </div>

        </div>
    </div>

    <!-- Attendance Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-600">

                <!-- Table Head -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Student</th>
                        <th class="px-6 py-4">Roll No</th>
                        <th class="px-6 py-4">Class</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Status</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $attendance = [
                        ['id'=>1,'name'=>'Rahul Kumar','roll'=>101,'class'=>'10th','date'=>'2026-02-12','status'=>'Present'],
                        ['id'=>2,'name'=>'Anjali Singh','roll'=>102,'class'=>'10th','date'=>'2026-02-12','status'=>'Absent'],
                        ['id'=>3,'name'=>'Aman Verma','roll'=>103,'class'=>'10th','date'=>'2026-02-12','status'=>'Late'],
                    ];
                    @endphp

                    @foreach($attendance as $row)
                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $row['id'] }}
                        </td>

                        <!-- Student Info -->
                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($row['name'],0,1)) }}
                            </div>
                            <span>{{ $row['name'] }}</span>
                        </td>

                        <td class="px-6 py-4">{{ $row['roll'] }}</td>
                        <td class="px-6 py-4">{{ $row['class'] }}</td>
                        <td class="px-6 py-4">{{ $row['date'] }}</td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($row['status'] == 'Present')
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                                    Present
                                </span>
                            @elseif($row['status'] == 'Absent')
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                    Absent
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-yellow-100 text-yellow-700 rounded-full">
                                    Late
                                </span>
                            @endif
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection
