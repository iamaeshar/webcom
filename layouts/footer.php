<footer class="pt-4 pb-2 bg-primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div>
                    <a class="text-white mr-2" href="https://www.facebook.com/webcomTrade/"><i class="fa-2x fab fa-facebook-square"></i></a>
                    <a class="text-white mr-2" href="https://twitter.com/etrade_webcom"><i class="fa-2x fab fa-twitter-square"></i></a>
                    <a class="text-white mr-2" href="https://in.linkedin.com/company/webcom-etrade"><i class="fa-2x fab fa-linkedin"></i></a>
                </div>
                <br>
                <p>
                    Copyright © 2017 Profits in Nifty MCX Gold, Forex, Nifty, Share Trading & Signalling Software in India -
                    All Rights Reserved
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div>
                    <a class="text-white mr-2 d-inline-block" href="/">HOME</a>
                    <a class="text-white mr-2 d-inline-block" href="about-us.php">ABOUT US</a>
                    <a class="text-white mr-2 d-inline-block" href="http://www.webcomtechnologiesusa.com/payment.php"
                        target="_blank">BUY</a>
                    <a class="text-white mr-2 d-inline-block" href="contact-us.php">CONTACT US</a>
                    <a class="text-white mr-2 d-inline-block" href="sitemap.html">SITEMAP</a>
                </div>
                <br>
                <p class="mt-2">
                    Designed and Developed by <a href="https://www.wampinfotech.com" class="text-white">WAMP Infotech Pvt
                        Ltd.</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Start of BS4 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<!-- End of BS4 JS -->

<script>
    $(document).ready(function () {
        var url = window.location.pathname;
        var link = url.split("/").pop();
        if (link == '') {
            $('#home').addClass('active');
        } else {
            $('.nav-item').each(function () {
                if ($(this).find('a').attr('href') == link) {
                    $(this).addClass('active');
                }
            });

            $('.dropdown-item').each(function () {
                if ($(this).attr('href') == link) {
                    $(this).closest('.nav-item').addClass('active');
                    $(this).addClass('active');
                }
            });
        }
    })
</script>

<!-- Google Analytics -->
<!-- <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {

                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),

                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)

        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-99610789-1', 'auto');
        ga('send', 'pageview');
    </script> -->

<!-- Google Code for Remarketing Tag -->
<!-- <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1009178095;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
		/* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=""
                src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1009178095/?guid=ON&amp;script=0" />
        </div>
    </noscript> -->