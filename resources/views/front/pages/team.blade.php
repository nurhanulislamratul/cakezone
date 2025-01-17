 @extends('master')
 @section('main_content')

 @yield('team_content')

 <!-- Page Header Start -->
 <div class="container-fluid bg-dark bg-img p-5 mb-5">
     <div class="row">
         <div class="col-12 text-center">
             <h1 class="display-4 text-uppercase text-white">Master Chefs</h1>
             <a href="">Home</a>
             <i class="far fa-square text-primary px-2"></i>
             <a href="">Master Chefs</a>
         </div>
     </div>
 </div>
 <!-- Page Header End -->


 <!-- Team Start -->
 <div class="container-fluid py-5">
     <div class="container">
         <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
             <h2 class="text-primary font-secondary">Team Members</h2>
             <h1 class="display-4 text-uppercase">Our Master Chefs</h1>
         </div>
         <div class="row g-5">
             @foreach ($data as $team)

             <div class="col-lg-4 col-md-6">
                 <div class="team-item">
                     <div class="position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="{{asset($team->img)}}" alt="">
                         <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                             <div class="d-flex align-items-center justify-content-start">
                                 <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="{{$team->x}}"><i class="fab fa-twitter fw-normal"></i></a>
                                 <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="{{$team->facebook}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                 <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="{{$team->linkdin}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bg-dark border-inner text-center p-4">
                         <h4 class="text-uppercase text-primary">{{$team->fullname}}</h4>
                         <p class="text-white m-0">{{$team->jobtitle}}</p>
                     </div>
                 </div>
             </div>
             @endforeach

         </div>
     </div>
 </div>
 <!-- Team End -->
 @endsection