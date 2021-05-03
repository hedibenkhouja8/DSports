@extends('layouts.app')
@section('content')

 <!-- start slider section -->
 <div class="slider_section banner_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_text">
                    <h1>Welcome to<br><strong class="bold_text">D</strong><strong class="bold_text_black">Sports</strong></h1>
                    <span>Contrary to popular belief,Sports isn't a waste of time it's a gold mine </span>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slider section -->


<!-- six_box-->
<div class="container">
    <div class="six_box">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box">
                    <h3>Cycling</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box yellow_box">
                    <h3>Swimming</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box">
                    <h3>dance</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box yellow_box">
                    <h3>yoga</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box">
                    <h3>cardio</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                <div class="black_box yellow_box">
                    <h3>Weight Training</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end six_box-->

<!-- about -->
<div id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="about_img">
                    <figure><img src="images/about-img.jpg" alt="#" /></figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa-ing">
                <div class="about_text">
                    <div class="about_text_box">
                        <h2>Our Coaches Say</h2>
                        @foreach ($coaches as $coach)
                        <p>-</strong>{{ $coach->description }}</p> 
                        @endforeach
                         </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- training -->
<div id="training" class="training">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">











                </div>
            </div>
            <!-- end training -->

            <!-- Gallery -->
            <div id="gallery" class="Gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Check out our<strong class="black"> Clients</strong></h2>
                                <span>take a look here</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="row">
                                <div class="col-md-12 mar_bottom">
                                    <div class="Gallery_box">
                                       
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="Gallery_box">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mar_bottom">
                                    <div class="Gallery_box">
                                                          </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mar_bottom">
                                    <div class="Gallery_box">
                                          </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="Gallery_box">
                                     </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="Gallery_box">
    </div>
                                </div>








                                @foreach ($clients as $client)
                            
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="Gallery_box">
                                        <figure><img src="{{ $client->picture }}" style="margin=20 " alt="#" /></figure>
                                    </div>
                                </div>
            @endforeach
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Gallery -->

            <!-- Reviwe -->
            <div id="review" class="Reviwe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Review</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="Reviwe_box">
                                <i><img src="images/title.png" alt="#" /></i>
                                <h3>Jone due</h3>
                                <p>It is a long established fact that a reader wil
                                    <br> l be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                    <br>has a more-or-less normal distribution of letters,
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Reviwe -->

            
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Contact<strong class="black"> Us</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid padddd">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
                    <div class="map_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <form class="main_form">
                                        <div class="row">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Name" type="text" name="Name">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Email" type="text" name="Email">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <button class="send">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="map">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
@endsection


           
