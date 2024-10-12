@extends('admin-master')

@section('main_content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <!-- Total Team Members Card -->
        <div class="col-sm-6 col-xl-4">
            <div class="bg-white rounded-lg shadow-lg p-6 h-full transition duration-300 ease-in-out transform hover:scale-105">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-full">
                        <i class="fa fa-users fa-3x text-blue-600"></i>
                    </div>
                    <div class="ms-4">
                        <p class="text-sm text-gray-500">Total Team Members</p>
                        <h6 class="text-xl font-bold text-gray-900">{{ $teamCount }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Cakes Card -->
        <div class="col-sm-6 col-xl-4">
            <div class="bg-white rounded-lg shadow-lg p-6 h-full transition duration-300 ease-in-out transform hover:scale-105">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <i class="fa fa-birthday-cake fa-3x text-green-600"></i>
                    </div>
                    <div class="ms-4">
                        <p class="text-sm text-gray-500">Total Cakes</p>
                        <h6 class="text-xl font-bold text-gray-900">{{ $serviceCount }}</h6>
                        <ul class="mt-2 text-gray-700">
                            @foreach ($services as $service)
                            <li class="mb-1">
                                <strong>{{ $service->name }}</strong><br>
                                <small>{{ $service->description }}</small>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="col-sm-6 col-xl-4">
            <div class="bg-white rounded-lg shadow-lg p-6 h-full transition duration-300 ease-in-out transform hover:scale-105">
                <div class="flex items-center">
                    <div class="p-3 bg-orange-100 rounded-full">
                        <i class="fa fa-shopping-cart fa-3x text-orange-600"></i>
                    </div>
                    <div class="ms-4">
                        <p class="text-sm text-gray-500">Total Orders</p>
                        <h6 class="text-xl font-bold text-gray-900">{{ $odernow }}</h6>
                        <!-- Assuming you want to display more details about each order -->
                        <ul class="mt-2 text-gray-700">
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection