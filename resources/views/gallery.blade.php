@extends('layouts.app')

@section('content')
       <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Our best offers</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-6.jpg"></div>
                        <h3 class="types_text">Mobil Brio</h3>
                          <p class="looking_text">Start form Rp.150.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-7.jpg"></div>
                        <h3 class="types_text">Mobil Brio</h3>
                          <p class="looking_text">Start from Rp.200.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-8.jpg"></div>
                        <h3 class="types_text">Mobil Brio</h3>
                          <p class="looking_text">Start from Rp.250.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-9.jpg"></div>
                        <h3 class="types_text">Mobil Yaris</h3>
                          <p class="looking_text">Start from Rp.300.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-10.jpg"></div>
                        <h3 class="types_text">Mobil Yaris</h3>
                          <p class="looking_text">Start from Rp.350.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/portfolio-11.jpg"></div>
                        <h3 class="types_text">Mobil Yaris</h3>
                          <p class="looking_text">Start from Rp.400.000</p>
                        <div class="read_bt"><a href="{{ route('booknow') }}">Book Now</a></div>
                        <div class="read_bt"><a href="{{ route('detailscar') }}">Details</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection