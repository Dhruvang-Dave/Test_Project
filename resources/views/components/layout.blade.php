{{-- @extends('components.fine') --}}

<!doctype html>

<title>Digital Advertisment</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    html{
        scroll-behaviour: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/digital.png" alt="Digital Logo" width="100" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <div class="flex">
                    <img src="/storage/{{ auth()->user()->profilePic }}" alt="Profile Picture" width="50px" class="rounded-2xl">
                    </div>
                    <div class="dropdown relative flex lg:inline-flex items-center rounded-xl">
                    <button class="mr-5 btn dropdown-toggle" name="category" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false" href="/register" class="text-xs font-bold uppercase">Welcome {{ auth()->user()-> name }}</button>
                        </button>
                        <ul class="dropdown-menu" value="category" aria-labelledby="dropdown">
                        @can('admin')
                            <li><a name="catagories" class="dropdown-item" href="/admin/posts">Dashboard</a></li>
                            <li><a name="catagories" class="dropdown-item" href="/admin/posts/create">New Post</a></li>
                        @endcan
                            <li><a name="catagories" class="dropdown-item" href="/logout">Logout</a></li>
                            
                    </div>
                    @else
                    <a href="/register" class="text-xs mr-5 text-xl font-bold uppercase">Register</a>
                    <a href="/login" class="text-xs mr-5 text-xl font-bold uppercase">Login</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-xl text-xs font-bold text-white uppercase py-3 px-4">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        <body>

            @yield('main-section')
        
        </body>

        {{-- @dd('Okau'); --}}




<!-- Begin Mailchimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://gmail.us10.list-manage.com/subscribe/post?u=3d40563aa0d62871eb2fa7e8d&amp;id=398c6d4ccb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3d40563aa0d62871eb2fa7e8d_398c6d4ccb" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/h5JAwj" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> -->
            <!-- </div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script> -->
<!--End mc_embed_signup -->



        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-5" style="width: 145px;">
            <h5 class="text-3xl"> Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3"> Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                <div id="mc_embed_signup">
                    <form action="https://gmail.us10.list-manage.com/subscribe/post?u=3d40563aa0d62871eb2fa7e8d &amp; id=398c6d4ccb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate lg:flex text-sm" target="_blank" novalidate>
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            
                            <input name="email" id="email" type="text" placeholder="Your email address"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                            <div id="mce-responses" class="clear foot">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div> 
                        </div>

                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    </form>
                    </div>    
                </div>
            </div>
        </footer>
    </section>
<x-flash />
</body>