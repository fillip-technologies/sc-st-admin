@extends('admin.include.layout')

@section('content')

<div class="p-6">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Library Books</h1>
        <button class="bg-[#133860] hover:bg-blue-900 text-white px-4 py-2 rounded-lg shadow">
            + Add Book
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
                        <th class="px-6 py-4">Book</th>
                        <th class="px-6 py-4">Author</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">ISBN</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Available</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">

                    @php
                    $books = [
                        [
                            'id'=>1,
                            'title'=>'Mathematics Guide',
                            'author'=>'R.K. Sharma',
                            'category'=>'Academic',
                            'isbn'=>'978-1234567890',
                            'total'=>10,
                            'available'=>4
                        ],
                        [
                            'id'=>2,
                            'title'=>'Science Explorer',
                            'author'=>'Neha Verma',
                            'category'=>'Science',
                            'isbn'=>'978-9876543210',
                            'total'=>8,
                            'available'=>0
                        ],
                        [
                            'id'=>3,
                            'title'=>'English Grammar',
                            'author'=>'Amit Singh',
                            'category'=>'Language',
                            'isbn'=>'978-5678901234',
                            'total'=>12,
                            'available'=>7
                        ],
                    ];
                    @endphp

                    @foreach($books as $book)

                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $book['id'] }}
                        </td>

                        <!-- Book Info with Initial -->
                        <td class="px-6 py-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[#133860] text-white flex items-center justify-center font-semibold">
                                {{ strtoupper(substr($book['title'],0,1)) }}
                            </div>
                            <span class="font-medium text-gray-800">
                                {{ $book['title'] }}
                            </span>
                        </td>

                        <td class="px-6 py-4">{{ $book['author'] }}</td>

                        <!-- Category Badge -->
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                {{ $book['category'] }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-gray-700">{{ $book['isbn'] }}</td>

                        <td class="px-6 py-4 font-semibold">
                            {{ $book['total'] }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-green-600">
                            {{ $book['available'] }}
                        </td>

                        <!-- Status Badge -->
                        <td class="px-6 py-4">
                            @if($book['available'] > 0)
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">
                                    Available
                                </span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">
                                    Out of Stock
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
