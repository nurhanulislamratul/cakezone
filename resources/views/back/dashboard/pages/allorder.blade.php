@extends('admin-master')

@section('main_content')
<div class="w-full p-8 bg-white rounded-lg shadow-lg">
    <h2 class="text-3xl font-extrabold text-center mb-8 mt-6 text-orange-600">Order List</h2>

    <!-- Success Message Display -->
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow-sm">
        {{ session('success') }}
    </div>
    @endif

    <!-- Table for Displaying Orders -->
    <div class="table-container overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="bg-orange-600 text-white">
                    <th class="py-4 px-6 text-left">Order ID</th>
                    <th class="py-4 px-6 text-left">Customer Name</th>
                    <th class="py-4 px-6 text-left">Email</th>
                    <th class="py-4 px-6 text-left">Address</th>
                    <th class="py-4 px-6 text-left">Cake Type</th>
                    <th class="py-4 px-6 text-left">Order Date</th>
                    <th class="py-4 px-6 text-left">Status</th>
                    <th class="py-4 px-6 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($orders as $order)
                <tr class="hover:bg-gray-100 transition duration-200">
                    <td class="py-4 px-6">{{ $order->id }}</td>
                    <td class="py-4 px-6">{{ $order->user->name }}</td>
                    <td class="py-4 px-6">{{ $order->email }}</td>
                    <td class="py-4 px-6">{{ $order->address }}</td>
                    <td class="py-4 px-6">{{ $order->cake_type }}</td>
                    <td class="py-4 px-6">{{ $order->created_at->format('d M, Y') }}</td>
                    <td class="py-4 px-6">
                        @if ($order->status == 'accepted')
                        <span class="inline-block px-3 py-1 text-sm font-semibold bg-green-100 text-green-600 rounded-full">Accepted</span>
                        @elseif ($order->status == 'rejected')
                        <span class="inline-block px-3 py-1 text-sm font-semibold bg-red-100 text-red-600 rounded-full">Rejected</span>
                        @else
                        <span class="inline-block px-3 py-1 text-sm font-semibold bg-yellow-100 text-yellow-600 rounded-full">Pending</span>
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex space-x-2">
                            @if ($order->status !== 'accepted')
                            <form action="{{ route('order.accept', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded shadow-sm text-sm">Accept</button>
                            </form>
                            @endif
                            @if ($order->status !== 'rejected')
                            <form action="{{ route('order.reject', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded shadow-sm text-sm">Reject</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection