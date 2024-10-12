@extends('back.dashboard.dashboard')
@section('main_home')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">My Orders</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Cake Type</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <!-- Action er header ta remove kora holo karon user er kono action thakbe na -->
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->cake_type }}</td>
                        <td>{{ $order->created_at->format('d M, Y') }}</td>
                        <td>
                            @if ($order->status == 'accepted')
                            <span class="badge bg-success">Accepted</span>
                            @elseif ($order->status == 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                            @else
                            <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>
                        <!-- Action part ke sudhu admin er jonno rakhbo -->
                        @if (Auth::user()->role == 'admin')
                        <td>
                            <div class="btn-group">
                                @if ($order->status !== 'accepted')
                                <form action="{{ route('order.accept', $order->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Accept</button>
                                </form>
                                @endif
                                @if ($order->status !== 'rejected')
                                <form action="{{ route('order.reject', $order->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                </form>
                                @endif
                            </div>
                        </td>
                        @endif
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No orders found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection