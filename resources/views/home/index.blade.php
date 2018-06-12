@extends('layouts.index')
@section('title','Khách sạn Phương Thanh - Đà Lạt')
@section('cssCustom')
@endsection
@section('jsCustom')
    <script>
        jQuery(document).ready(function(){
            jQuery('button#search').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $("button#search").ajaxStart(function() {
                    $(this).empty().append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>');
                }).ajaxStop(function() {
                    $(this).empty().append('<i class="fa fa-search" aria-hidden="true"></i>');
                });
                jQuery.ajax({
                    url: "{{ url('/search') }}",
                    method: 'post',
                    beforeSend: function() {
                        $("button#search").empty().append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>');
                    },
                    data: {
                        phone: jQuery('input#search').val()
                    },
                    success: function(data){
                        console.log(data);
                        var t ='';
                       $.each(data,function (i,l) {
                           t += '<div class="card" style="margin: 10px 0">' +
                               '                        <div class="card-header">' +
                               '                            <a data-toggle="collapse" data-parent="#accordion" href="#card'+i+'" style="float: left">' +
                               l['customer_name'] +
                               '                            </a>' +
                               '                        </div>' +
                               '                        <div id="card'+i+'" class="collapse" style="color: #000">' +
                               '                            <div class="card-body" style="text-align: left">' +
                               '                                <ul class="list-group list-group-flush">' +
                               '                                    <li class="list-group-item">Số điện thoại: '+l['customer_phone']+'</li>' +
                               '                                    <li class="list-group-item">Ngày đặt: '+l['created_at']+'</li>' +
                               '                                    <li class="list-group-item">Số điện thoại: 01636861069</li>' +
                               '                                </ul>' +
                               '                            </div>' +
                               '                            <div class="card-footer">' +
                               '                                <a href="{{url('/')}}/reservation/'+l['id']+'"> Xem chi tiết</a>' +
                               '                            </div>' +
                               '                        </div>' +
                               '                    </div>';
                       });
                       if(t==='')
                       {
                           $("#result-content").fadeIn();
                           $("p#error").css('display','block').html('Không tìm thấy số điện thoại '+$('input#search').val());
                           $("#result-card").hide();
                       }
                       else
                       {
                           $("p#error").hide();
                           $("#result-content").slideDown(100);
                           $("#result-card").show();
                           $("#result-card").html(t);
                       }

                    }
                })
                    .done(function( data ) {
                        $("button#search").empty().append('<i class="fa fa-search" style="font-size:24px"></i>');
                    })
            });
        });
    </script>
@endsection
@section('content')
    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay" style="background: rgb(28,35,49);opacity: 1"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-5">Nhập số điện thoại để kiểm tra đặt phòng</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="text" name="phone" class="form-control form-control-lg" id="search" placeholder="0123456789">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="button" class="btn btn-block btn-lg bg-red-common" id="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                    <div id="result-content" style="display: none;margin-top: 15px">
                    <h5>Kết quả tìm kiếm</h5>
                        <p id="error" style="display: none"></p>
                        <div id="result-card"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Fully Responsive</h3>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Bootstrap 4 Ready</h3>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Easy to Use</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Fully Responsive Design</h2>
                <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Updated For Bootstrap 4</h2>
                <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                    <h5>Margaret E.</h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                    <h5>Sarah	W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Ready to get started? Sign up now!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


