@extends('layouts.app')
    @section('content')
        <section id="about" class="portfolio section-bg">
            <div class="" style="margin-left:10px;margin-right:10px;">
                  
                <div class="row portfolio-container">
                    <div class="col-12 col-md-7 portfolio-item filter-app mb-4">
                        <li style="text-align:center;font-weight: bold;font-size: 23px; height:50px;"><i class="far fa-check-circle" style="color:darkred;"></i>  <span style="color: darkred;text-decoration: underline;">University Partners</span></li>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/university.jpg')}}"  class="img-fluid" alt="" style="height:50vh;">
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-5 portfolio-item filter-app mb-3">
                        <div>
                            
                            <li style="text-align:center; font-weight: bold;font-size: 23px;height:50px;"><i class="far fa-check-circle" style="color:darkred;"></i>  <span style="color: darkred;text-decoration: underline;">Targeted Journals and Publishers</span></li>
                        </div>
                        <div class="portfolio-wrap mt-5">
                            <img src="{{asset('assets/img/journaux.jpg')}}" class="img-fluid w-100" style="height:50vh;" alt="">
                            
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->
       @endsection