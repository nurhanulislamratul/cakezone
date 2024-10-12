@extends('master')
@section('main_content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Order Your Cake</h1>
            <a href="">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Order</a>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Order Start -->
<div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-geo-alt fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Our Office</h6>
                    <span>123 Street, New York, USA</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-envelope-open fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Email Us</h6>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Call Us</h6>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{route('order.create')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="text" class="form-control bg-light border-0 px-4" name="name" placeholder="Your Name" required style="height: 55px;">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control bg-light border-0 px-4" name="email" placeholder="Your Email" required style="height: 55px;">
                        </div>

                        <!-- Phone Number Field -->
                        <div class="col-sm-12">
                            <input type="text" class="form-control bg-light border-0 px-4" name="phone" placeholder="Your Phone Number" required style="height: 55px;">
                        </div>

                        <div class="col-sm-12">
                            <input type="text" class="form-control bg-light border-0 px-4" name="address" placeholder="Your Address" required style="height: 55px;">
                        </div>
                        <div class="col-sm-12">
                            <select class="form-control bg-light border-0 px-4" name="cake_type" required style="height: 55px;">
                                <option value="" disabled selected>Select Cake Type</option>
                                <option value="birthday">Birthday Cake</option>
                                <option value="wedding">Wedding Cake</option>
                                <option value="custom">Custom Cake</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" name="message" placeholder="Any additional message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary border-inner w-100 py-3" type="submit">Place Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Order End -->
@endsection