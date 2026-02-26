@extends('admin.include.layout')

@section('heading', 'Users')
@section('title', 'Add User')

@section('content')

<div class="max-w-4xl mx-auto mt-10">

    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">

        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Add New User
        </h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ auth()->user()->role === 'admin' ? route('admin.user.save') : route('save.user') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Enter full name">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Enter email address">
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium mb-1">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Enter phone number">
                </div>

                <!-- Role -->
                <div>
                    <label class="block text-sm font-medium mb-1">Role</label>
                    <select name="role"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="super-admin">Super Admin</option>
                    </select>
                </div>

                <!-- Address -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1">Address</label>
                    <textarea name="address" rows="3"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Enter address">{{ old('address') }}</textarea>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Enter password">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation"
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                        placeholder="Confirm password">
                </div>

            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="bg-[#133860] hover:bg-blue-900 text-white px-6 py-2 rounded-lg shadow">
                    Save User
                </button>
            </div>

        </form>

    </div>

</div>

@endsection
