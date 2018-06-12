<!-- Footer -->
<footer class="footer bg-red-common" style="color: #fff!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                {{--<ul class="list-inline mb-2">--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">About</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">&sdot;</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">Contact</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">&sdot;</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">Terms of Use</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">&sdot;</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">Privacy Policy</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                <p class="text-muted small mb-4 mb-lg-0" style="color: rgb(255,255,255)!important;">&copy; Phuong Thanh Hotel - 2018</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-facebook fa-2x fa-fw" style="color: rgb(255,255,255)!important;"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-twitter fa-2x fa-fw" style="color: rgb(255,255,255)!important;"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-instagram fa-2x fa-fw" style="color: rgb(255,255,255)!important;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src={{asset("/vendor/jquery/jquery.min.js")}}></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src={{asset("/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
@yield('addJs')
@yield('jsCustom')
</body>
</html>