@extends('layouts.app')
      @section('content')
<main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container">
                <h2 class="" style="font-size: 75px;text-align: center; font-weight: 700;">
                    <label for="" style="color: darkred;">S</label><label for="" style="color: black;">ci</label><label for="" style="color:darkred;">P</label><label for="" style="color: black;">ub</label>
                </h2>
                @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                @endif
                @if(session('danger'))
                    <div class="alert alert-danger">{{session('danger')}}</div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-8 col-md-10">
                        <div class="">
                            <div class="" style="">
                            <form action="{{route('contact.store')}}" method="POST"  class="mt-5">
                                @csrf
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                                @endif
                                <div class="form-group ">
                                    <input  name="name" class="form-control "  placeholder="Your Name " data-msg="Please enter at least 4 chars " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input  class="form-control " name="email"  placeholder="Your Email " data-msg="Please enter a valid email " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <input  class="form-control " name="subject"  placeholder="Subject " data-msg="Please enter at least 8 chars of subject " />
                                    <div class="validate "></div>
                                </div>
                                <div class="form-group ">
                                    <textarea class="form-control " name="mail_message" rows="7 " data-msg="Please write something for us " placeholder="Message "></textarea>
                                    <div class="validate "></div>
                                </div>

                                

                                <div class="text-center "><a href="/"><button type="submit " title="Send Message " class="btn btn-info">Send Message</button></div></a>
                            </form>

                        </div>

                            
                        
                    </div>
                </div>
            </div>
 
        </section>
        <!-- End About Section -->
       
      

























       @endsection
