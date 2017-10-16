<?php session_start(); ?>
<!doctype html>

<html lang="en" class="no-js">

<head>

    <title>XXXXXXXXXXX</title>

    <meta charset="utf-8">

    <?php include( "../../../../grabbag/favicons.html"); ?>

    <?php include( "../../../../grabbag/css.html"); ?>

    <?php include( "../../../../grabbag/scripts.php"); ?>

    <?php include( "../../../../grabbag/meta.html"); ?>

    <meta property="og:image" content="http://DOMAIN.com/images/blog/YEAR/MONTH/DAY/IMAGE">
    <meta name="description" content="XXXXXXXXXXXXX">

    <?php include("../../../../grabbag/piwik.html"); ?>

</head>

<body>

    <div id="wrapper">

        <header>

            <?php include( "../../../../grabbag/topline.html"); ?>

            <?php include( "../../../../grabbag/dropdown.html"); ?>

            <?php include( "../../../../grabbag/navbar.html"); ?>

        </header>

        <div id="leftandright" class="cf">

            <aside id="right-panel">

                <?php include( "../../../../grabbag/boxes.php"); ?>

            </aside>

            <script>
                $(".blogtree").treetable({
                    expandable: true,
                    clickableNodeNames: false,
                    initialState: "collapsed",
                    indent: 15,
                })
                $(".blogtree").treetable("expandNode", "X")
                $(".blogtree").treetable("expandNode", "X.X")
                ;
            </script>

            <main id="left-panel">

                <article>

                    <div class="blog-title-and-date cf">
                        <p class="blog-date"><span class="greyed-date"><time datetime="YEAR-MM-DD" pubdate>MONTH DAY<sup>SUFFIX</sup>, YEAR</time></span></p>
                        <h1 class="blog-title">XXXXXXXXXXXXX</h1>
                    </div>

                    <div class="dotted"></div>

                    <figure class="floatright">
                        <a class="image-popup-no-margins" href="/images/blog/YEAR/MONTH/DAY/FILE-NAME" title="">
                            <img src="/images/blog/YEAR/MONTH/DAY/FILE-NAME">
                             <span class="lines-X"></span>
                        </a>
                        <figcaption>
                        </figcaption>
                    </figure>

                    <figure class="no-website-table no-print">
                        <img src="/images/blog/YEAR/MONTH/DAY/FILE-NAME">
                        <figcaption>
                        </figcaption>
                    </figure>

                    <p>XXXXXXXXXXXXXXXX.</p>
                    <p>XXXXXXXXXXXXXXXX.</p>
                    <p>XXXXXXXXXXXXXXXX.</p>
                    <p>XXXXXXXXXXXXXXXX.</p>
                    <p>XXXXXXXXXXXXXXXX.</p>
                    <p>XXXXXXXXXXXXXXXX.</p>

                </article>

                <div id="filed-under">
                    <ul>
                        <li><span style="font-weight: bold">FILED UNDER:</span>
                        </li>
                        <div class="no-website-block no-print filed-buffer-for-mobiles"></div>
                        <li><a href="/blog/category/CATEGORY" target="_self">CATEGORY NAME</a>
                        </li>
                        <li>|</li>
                        <li><a href="/blog/category/CATEGORY" target="_self">CATEGORY NAME</a>
                        </li>
                    </ul>
                </div>

                <?php include("../../../../grabbag/bottom-javascripts.php"); ?>

                <div id="share">

                    <ul>

                        <!-- FACEBOOK -->

                        <li id="fb">
							<div class="fb-share-button" data-href="http://DOMAIN.com/blog/YEAR/MONTH/XXXXXXXXXXXX" data-layout="button_count"></div>
                        </li>

                        <!-- TWITTER -->

                        <li style="width: 78px">
                            <a id="twit-butt" href="https://twitter.com/share" class="twitter-share-button" data-url="http://DOMAIN.com/blog/YEAR/MONTH/XXXXXXXXXXXX" data-via="AVATAR" data-dnt="true">Tweet</a>
                            <script>
                                ! function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + '://platform.twitter.com/widgets.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, 'script', 'twitter-wjs');
                            </script>
                        </li>

                        <!-- LINKEDIN -->

                        <li id="linkedin">
                            <script src="//platform.linkedin.com/in.js" type="text/javascript">
                                    lang: en_US
                            </script>
                            <script type="IN/Share" data-counter="right" data-url="http://DOMAIN.com/blog/YEAR/MONTH/XXXXXXXXXXXX"></script>
                        </li>

                        <!-- SPLIT -->

                        <div class="no-website-block no-print social-split-for-mobiles"></div>

                        <!-- PINTEREST -->

                        <li id="pinterest">
                            <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
                            <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                        </li>

                        <!-- REDDIT -->

                        <li id="reddit">
                            <script type="text/javascript">
                                    reddit_url = "http://DOMAIN.com/blog/YEAR/MONTH/XXXXXXXXXXXX";
                            </script>
                            <script type="text/javascript" src="//www.redditstatic.com/button/button1.js"></script>
                        </li>

                        <!-- GOOGLE+ -->

                        <li id="g-plus" style="width: 60px">
                            <div class="g-plusone" data-size="medium" data-href="http://DOMAIN.com/blog/YEAR/MONTH/XXXXXXXXXXXX"></div>
                            <script type="text/javascript">
                                (function () {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </li>

                    </ul>

                </div>

                <div class="buttons-post-top cf">
                    <a href="/blog/YEAR/MONTH/TITLE" class="myButton button-left">&lt;&nbsp;&nbsp;Previous&nbsp;&nbsp;</a>
                    <a href="/" class="myButton button-home"><span class="home-center">Home</span></a>
                    <span class="myButton-inactive button-right-inactive">&nbsp;</span>
                </div>

                <div id="comments">
                    <?php
                        $cmtx_identifier = '00XX';
                        $cmtx_reference  = 'TITLE';
                        $cmtx_folder     = '/commentics/';
                        require($_SERVER['DOCUMENT_ROOT'] . $cmtx_folder . 'frontend/index.php');
				    ?>
				</div>

                <div class="buttons-post-bottom">
                    <a href="/blog/YEAR/MONTH/TITLE" class="myButton button-left">&lt;&nbsp;&nbsp;Previous&nbsp;&nbsp;</a>
                    <a href="/" class="myButton button-home"><span class="home-center">Home</span></a>
                    <span class="myButton-inactive button-right-inactive">&nbsp;</span>
                </div>

			</main>

		</div>

		<?php include("../../../../grabbag/scrollup-link.html"); ?>

		<?php include("../../../../grabbag/footline.html"); ?>

	</div>

    <script>
        function preload(arrayOfImages) {
            $(arrayOfImages).each(function () {
                $('<img/>')[0].src = this;
            });
        }
        preload([
            <?php include("../../../../grabbag/preload-images.html"); ?>
        ]);
    </script>

</body>

</html>