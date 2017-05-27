<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <form class="form-inline select-region" action="<?php echo site_url('sights/get') ?>" method="POST">
        <div class="col-sm-3">
            <select id="region" name="region" title="region" class="form-control">
                <option title="Please select a region" value="0">All sights</option>
                <option title="Aragatsotn" value="1">Aragatsotn</option>
                <option title="Ararat" value="2">Ararat</option>
                <option title="Armavir" value="3">Armavir</option>
                <option title="Gegharkunik" value="4">Gegharkunik</option>
                <option title="Kotayk" value="5">Kotayk</option>
                <option title="Lori" value="6">Lori</option>
                <option title="Shirak" value="7">Shirak</option>
                <option title="Syunik" value="8">Syunik</option>
                <option title="Tavush" value="9">Tavush</option>
                <option title="Vayotz Dzor" value="10">Vayotz Dzor</option>
                <option title="Yerevan" value="11"><b>Yerevan</b></option>
            </select>
            <button type="submit" class="btn btn-default select-region-button">Submit</button>
        </div>
    </form>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1>Welcome to Armenia!</h1>
        <br>
        <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Attractions and Sacred Places</h1>

                <p class="lead">Armenia - the country of old legends and Biblical stories. To visit Armenia is to travel back in history
                    and feel the spirit of more than 41 centuries.
                    Experience first hand the "country sheltered by Biblical Ararat” home of Noah’s Ark;
                    the land where human kind was reborn. Armenia offers a little something for every person.</p>

                <p class="lead"> Rich with historical churches, monasteries,
                    monuments, and magnificent masonry, this country that was the first to adopt Christianity and proclaim it as
                    its state religion in 301 AD is a unique treasure for those interested in great events.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="places" class="places bg-default">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Once in Armenia you <b>MUST</b> to visit</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="place-item">
                                <span class="fa-stack fa-5x">
                               <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Matenadaran.jpg">
                            </a>
                            </span>
                            <h4>
                                <strong>Matenadaran</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="place-item">
                                <span class="fa-stack fa-5x">
                               <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Garni.jpg">
                            </a>
                                    </span>
                            <h4>
                                <strong>Temple of Garni</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="place-item">
                                <span class="fa-stack fa-5x">
                                <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Ararat.jpg">
                            </a>
                            </span>
                            <h4>
                                <strong>Yerevan Brandy Factory</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Callout -->
<aside class="callout">
    <div class="text-vertical-center">
        <h1>What to see in Yerevan</h1>
    </div>
</aside>

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Places in Yerevan</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/RS.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Opera.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Cascade.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/Tsitsernakaberd.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                <a href="#" class="btn btn-dark">View More Items</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Map -->
<section id="contact" class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563370.057875598!2d43.91952057753392!3d40.065213958685916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40155684e773bac7%3A0xd0b4757aeb822d23!2sArmenia!5e0!3m2!1sen!2s!4v1495871496820" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!----> <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/Armenia/@40.065214,43.9195206,8z/data=!3m1!4b1!4m5!3m4!1s0x40155684e773bac7:0xd0b4757aeb822d23!8m2!3d40.069099!4d45.038189"></iframe>
    <br />
    <small>
        <a href="https://goo.gl/maps/tmrjHXZVH2k"></a>
    </small>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Armsight LLC</strong>
                </h4>
                <p>Teryan str.,
                    <br>Yerevan, Armenia</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (00374)10 592659</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name.surname@armsight.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Armsight 2017</p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>


<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    };
    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>
