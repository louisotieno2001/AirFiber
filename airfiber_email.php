<?php
session_start();
require_once 'config/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['your-name'] ?? '';
    $email = $_POST['your-email'] ?? '';
    $phone = $_POST['your-phone'] ?? '';
    $message = $_POST['your-message'] ?? '';

    // Data validation and sanitization here

    // Get the database connection
    $db = new Database();
    $conn = $db->getConnection();

    // Prepare and execute the SQL statement to insert data into the emails_list table
    $stmt = $conn->prepare("INSERT INTO emails_list (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $phone, $message);
    $stmt->execute();

    // You can add a success message or redirect to a success page here
    header("Location: success.php");
}
?>

<!doctype html>

<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <title>Email Us - AirFibre | AirFibre</title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <meta name="description"
        content="Do you want to learn about AirFibre Are you interested in unlimited internet for your home or office? Get in touch with us! " />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Email Us - AirFibre" />
    <meta property="og:description"
        content="Do you want to learn about AirFibre Are you interested in unlimited internet for your home or office? Get in touch with us! " />

  <style>
     .socials__wa {
			background-image: url(./Res/icon-whatsapp.png);
			-moz-background-size: 1.5rem;
			-o-background-size: 1.5rem;
			-webkit-background-size: 1.5rem;
			background-size: 1.5rem;
		}
  </style>


    <link rel='stylesheet' id='screen-css' href='./styles/index.css' media='screen' />


</head>

<body class="page-template page-template-page-contact page-template-page-contact-php page page-id-30">

    <header class="masthead" role="header">
        <a href="redirect.php?link=index" class="logo" style="padding: .9em;">
            <h3>AirFibre</h3>
        </a>
        <div class="wrap">
            <div class="masthead__left">
                <ul class="menu-main" role="navigation">
                    <li id="menu-item-113"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-113">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li id="menu-item-51"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a
                                    href="redirect.php?link=home_internet.php">Home Internet</a></li>
                            <li id="menu-item-50"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a
                                    href="redirect.php?link=biz_internet.php">Biz Internet</a></li>

                        </ul>
                    </li>
                    <li id="menu-item-41"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-41">
                        <a href="redirect.php?link=airfiber_company.php">About Us</a>
                        <ul class="sub-menu">
                            <li id="menu-item-58"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58"><a
                                    href="redirect.php?link=airfiber_mission.php">Our Mission</a></li>
                            <li id="menu-item-202"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a
                                    href="redirect.php?link=airfiber_company.php">Our Company</a></li>
                            <li id="menu-item-315"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-315"><a
                                    href="redirect.php?link=airfiber_company.php">Coverage</a></li>

                        </ul>
                    </li>
                    <li id="menu-item-42"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42">
                        <a href="#">Get Support</a>
                        <ul class="sub-menu">
                            <li id="menu-item-425"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425"><a
                                    href="redirect.php?link=airfibre_faqs.php">FAQ’s</a></li>

                            <li id="menu-item-645"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-645"><a
                                    target="_blank" rel="noopener" href="">T&#038;C&#8217;s</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-43"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-43">
                        <a href="#">Talk to Us</a>
                        <ul class="sub-menu">
                            <li id="menu-item-67"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-67">
                                <a href="redirect.php?link=airfiber_email.php" aria-current="page">Email Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="masthead__right">
                <ul class="menu-right" role="navigation">
                    <li id="menu-item-45"
                        class="m-trigger menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><a
                            href="">Call Us</a></li>
                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                        <a href="redirect.php?link=airfiber_get_connected.php" style="background-color: #001C30;">Get Connected</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--/.header-->


    <section class="banner" style="background-color: #93c580;">
        <div class="wrap">

            <article class="col col--txt">
                <h1>Get in touch.</h1>
            </article>

            <div class="col col--img" style="opacity:0.1">
            </div>

        </div>
    </section>

    <section class="row orange" id="content" style="background-color: #001C30; margin-top:-23em;">
        <div class="wrap formed">
            <div class="form-contact" style="margin-top: -1rem;">
                <div class="inner">
                    <div role="form" class="wpcf7" id="wpcf7-f195-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="" method="post" class="wpcf7-form init"
                            novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="195" />
                                <input type="hidden" name="_wpcf7_version" value="5.6.4" />
                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f195-o1" />
                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            </div>
                            <p><label>Your name<br />
                                    <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text"
                                            name="your-name" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="John Doe" /></span>
                                </label></p>
                            <p><label> Your email<br />
                                    <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email"
                                            name="your-email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="john@johndoe.co.ke" /></span> </label></p>
                            <p><label> Your phone<br />
                                    <span class="wpcf7-form-control-wrap" data-name="your-phone"><input type="tel"
                                            name="your-phone" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                            aria-invalid="false" placeholder="0711 223344" /></span> </label></p>
                            <p><label> Your message<br />
                                    <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea
                                            name="your-message" cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"></textarea></span> </label></p>
                            <p><input type="submit" value="Send message"
                                    class="wpcf7-form-control has-spinner wpcf7-submit button button--primary"
                                    style="background-color: #001C30;" /></p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bothom" id="footer">
        <div class="bothom__juu">
            <div class="wrap">
                <div class="footer-col4">
                    <h4>Get Connected</h4>
                    <ul>
                        <li><a href="redirect.php?link=home_internet.php">Home Internet</a></li>
                        <li><a href="redirect.php?link=biz_internet.php">Biz Internet</a></li>

                    </ul>
                </div>
                <div class="footer-col4">
                    <h4>Buyer's Guide</h4>
                    <ul>
                        <li><a href="redirect.php?link=airfiber_mission.php">Our Mission</a></li>
                        <li><a href="redirect.php?link=airfiber_company.php">Coverage</a></li>
                        <li><a href="">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col4">
                    <h4>Join AirFibre</h4>
                    <ul>
                        <li><a href="redirect.php?link=airfiber_company.php">Our Company</a></li>

                    </ul>
                </div>
                <div class="footer-col4">
                    <h4>Talk to Us</h4>
                    <ul>

                        <li><a href="">Phone number</a></li>
                        <li>&nbsp;</li>
                    </ul>
                    <ul class="socials">
                        <li><a target="_blank" rel="nofollow noopener" href="" class="socials__fb">&nbsp;</a></li>
                        <li><a target="_blank" rel="nofollow noopener" href="" class="socials__ig">&nbsp;</a></li>
                        <li><a target="_blank" rel="nofollow noopener" href="" class="socials__tw">&nbsp;</a></li>
                        <li><a target="_blank" rel="nofollow noopener" href="" class="socials__li">&nbsp;</a></li>
                        <li><a target="_blank" rel="nofollow noopener" href="" class="socials__wa">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bothom__mwisho">
            <div class="wrap">
                <div class="footer-col4">
                    <p class="small">AirFibre &copy; 2023. All rights reserved.</p>
                </div>
                <div class="footer-col4">
                </div>
                <div class="footer-col4">
                </div>

            </div>
        </div>

        <nav class="bothom__mobile">
            <div class="wrap">

                <ul class="menu-mini" role="navigation">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="">Call Us</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="redirect.php?link=airfiber_get_connected.php" class="internal">Get connected</a>
                    </li>
                </ul>
                <ul class="menu-main" role="navigation">
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-113">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a
                                    href="redirect.php?link=home_internet.php">Home Internet</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a
                                    href="redirect.php?link=biz_internet.php">Biz Internet</a></li>

                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-41">
                        <a href="redirect.php?link=airfiber_mission.php">About Us</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58"><a
                                    href="redirect.php?link=airfiber_mission.php">Our Mission</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a
                                    href="redirect.php?link=airfiber_company.php">Our Company</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-315"><a
                                    href="redirect.php?link=airfiber_company.php">Coverage</a></li>

                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42">
                        <a href="#">Get Support</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425"><a
                                    href="redirect.php?link=airfibre_faqs.php">FAQ’s</a></li>

                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-645"><a
                                    target="_blank" rel="noopener" href="">T&#038;C&#8217;s</a></li>
                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-43">
                        <a href="#">Talk to Us</a>
                        <ul class="sub-menu">

                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-67">
                                <a href="redirect.php?link=airfiber_email.php" aria-current="page">Email Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </footer>
</body>

</html>