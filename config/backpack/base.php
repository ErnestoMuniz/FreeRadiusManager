<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Look & feel customizations
    |--------------------------------------------------------------------------
    |
    | Make it yours.
    |
    */

    // Date & Datetime Format Syntax: https://carbon.nesbot.com/docs/#api-localization
    'default_date_format'     => 'D MMM YYYY',
    'default_datetime_format' => 'D MMM YYYY, HH:mm',

    // Direction, according to language
    // (left-to-right vs right-to-left)
    'html_direction' => 'ltr',

    // ----
    // HEAD
    // ----

    // Project name. Shown in the window title.
    'project_name' => 'FRMANAGER',

    // When clicking on the admin panel's top-left logo/name,
    // where should the user be redirected?
    // The string below will be passed through the url() helper.
    // - default: '' (project root)
    // - alternative: 'admin' (the admin's dashboard)
    'home_link' => '',

    // Content of the HTML meta robots tag to prevent indexing and link following
    'meta_robots_content' => 'noindex, nofollow',

    // ------
    // STYLES
    // ------

    // CSS files that are loaded in all pages, using Laravel's asset() helper
    'styles' => [
        'packages/backpack/base/css/bundle.css',

        // Here's what's inside the bundle:
        // 'packages/@digitallyhappy/backstrap/css/style.min.css',
        // 'packages/animate.css/animate.min.css',
        // 'packages/noty/noty.css',

        // Load the fonts separately (so that you can replace them at will):
        'packages/source-sans-pro/source-sans-pro.css',
        'packages/line-awesome/css/line-awesome.min.css',

        // Example (the fonts above, loaded from CDN instead)
        // 'https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css',
        // 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',

        // Example (load font-awesome instead of line-awesome):
        // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css',
    ],

    // CSS files that are loaded in all pages, using Laravel's mix() helper
    'mix_styles' => [ // file_path => manifest_directory_path
        // 'css/app.css' => '',
    ],

    // ------
    // HEADER
    // ------

    // Menu logo. You can replace this with an <img> tag if you have a logo.
    'project_logo'   => '<svg width="35px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#FFD62B;stroke-width:3;stroke-miterlimit:10;}
	.st1{fill:#B0C3C6;}
	.st2{fill:none;stroke:#DEE7E8;stroke-miterlimit:10;}
	.st3{fill:#00A6E2;}
	.st4{fill:none;stroke:#B0C3C6;stroke-width:2;stroke-miterlimit:10;}
	.st5{fill:#666666;}
	.st6{fill:none;stroke:#B0C3C6;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
	.st7{fill:#00C9ED;}
	.st8{fill:#FFFFFF;stroke:#B0C3C6;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
	.st9{fill:#303030;}
	.st10{opacity:0.4;fill:#F6F6F6;}
	.st11{fill:none;stroke:#999999;stroke-width:2;stroke-miterlimit:10;}
	.st12{fill:#999999;}
	.st13{fill:#FFFFFF;}
	.st14{clip-path:url(#SVGID_2_);fill:#2F3537;}
	.st15{opacity:0.3;fill:none;stroke:#9FB1B3;stroke-width:2;stroke-miterlimit:10;}
	.st16{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
	.st17{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
	.st18{fill:none;stroke:#303030;stroke-miterlimit:10;}
	.st19{opacity:0.8;fill:#B0C3C6;}
	.st20{opacity:0.7;}
	.st21{opacity:0.8;clip-path:url(#SVGID_4_);fill:#00A6E2;}
	.st22{opacity:0.8;fill:#00A6E2;}
	.st23{opacity:0.8;clip-path:url(#SVGID_6_);fill:#00A6E2;}
	.st24{clip-path:url(#SVGID_8_);}
	.st25{clip-path:url(#SVGID_10_);}
	.st26{fill:none;stroke:#B0C3C6;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
	.st27{opacity:0.3;fill:none;stroke:#9FB1B3;stroke-width:3;stroke-miterlimit:10;}
	.st28{fill:#FFFFFF;stroke:#B0C3C6;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
	.st29{clip-path:url(#SVGID_12_);fill:#2F3537;}
	.st30{clip-path:url(#SVGID_14_);fill:#B0C3C6;}
	.st31{fill:#33B8E8;}
	.st32{fill:#238DB4;}
	.st33{fill:#E2E7E8;}
	.st34{clip-path:url(#SVGID_16_);}
	.st35{fill:#FFFFFF;stroke:#B0C3C6;stroke-width:2;stroke-miterlimit:10;}
	.st36{fill:#B4CBCE;}
	.st37{fill:#003147;}
	.st38{fill:#FFD62B;}
	.st39{fill:#00B78E;}
	.st40{fill:#FF7824;}
	.st41{fill:#FF3223;}
	.st42{fill:#7955DF;}
	.st43{fill:none;stroke:#FF3223;stroke-width:2;stroke-miterlimit:10;}
	.st44{fill:none;stroke:#00A6E2;stroke-width:2;stroke-miterlimit:10;}
	.st45{clip-path:url(#SVGID_18_);fill:#303030;}
	.st46{fill:#F5C81F;}
	.st47{fill:#F49F90;}
	.st48{fill:#F3EEDE;}
	.st49{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
	.st50{fill:#00131F;}
	.st51{clip-path:url(#SVGID_20_);fill:#303030;}
	.st52{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
	.st53{clip-path:url(#SVGID_22_);fill:#303030;}
	.st54{clip-path:url(#SVGID_24_);fill:#303030;}
</style>
<g>
	<g>
		<g>
			<g>
				<g>
					<g>
						<g>
							<path class="st3" d="M125.5,113.6c-4.4,0-8.2-3-9.3-7.1c2.8,1,5.7,1.6,8.8,1.6c4.4,0,7.9-3.5,7.9-7.9c0-4.4-3.5-7.9-7.9-7.9         c-5.3,0-9.9-4.3-9.9-9.6c0-0.7,0-2.1,0-2.1v-6.1c0-19.4-15.7-35.2-35.2-35.2c-19.4,0-35.2,15.7-35.2,35.2v6.1         c0,0,0,1.3,0,2.1c0,5.3-4.6,9.6-9.9,9.6c-4.4,0-7.9,3.5-7.9,7.9c0,4.4,3.5,7.9,7.9,7.9c3.5,0,6.8-0.7,9.8-2         c-1,4.3-4.8,7.5-9.4,7.5c-4.4,0-7.9,3.5-7.9,7.9c0,4.4,3.5,7.9,7.9,7.9c6.9,0,13.2-2.8,17.8-7.3v10.4c0,4.4,3.5,7.9,7.9,7.9         c4.4,0,7.9-3.5,7.9-7.9v-14.8h3.1v18.7c0,4.4,3.5,7.9,7.9,7.9c4.4,0,7.9-3.5,7.9-7.9v-18.7H91v14.8c0,4.4,3.5,7.9,7.9,7.9         c4.4,0,7.9-3.5,7.9-7.9v-11.4c4.7,5.1,11.3,8.2,18.7,8.2c4.4,0,7.9-3.5,7.9-7.9C133.5,117.1,129.9,113.6,125.5,113.6z"/>
							<g>
								<circle class="st13" cx="80" cy="77" r="17.5"/>
								<g>
									<defs>
										<circle id="SVGID_17_" cx="80" cy="77" r="17.5"/>
									</defs>
									<use xlink:href="#SVGID_17_" style="overflow:visible;fill:#FFFFFF;"/>
									<clipPath id="SVGID_2_">
										<use xlink:href="#SVGID_17_" style="overflow:visible;"/>
									</clipPath>
									<path style="clip-path:url(#SVGID_2_);fill:#303030;" d="M85.3,94.6c-6.7,0-12.2-5.5-12.2-12.2c0-6.7,5.5-12.2,12.2-12.2           c6.7,0,12.2,5.5,12.2,12.2C97.5,89.1,92.1,94.6,85.3,94.6z"/>
								</g>
							</g>
						</g>
					</g>
				</g>
			</g>
			<g>
				<g>
					<ellipse class="st46" cx="79.7" cy="53.1" rx="41.8" ry="11.3"/>
					<path class="st38" d="M118.7,51.4H40.9c-3.2,0-1.7-2.6-1.7-5.7v-1.2c0,0,5.7-36.3,40.6-36.3s40.6,36.3,40.6,36.3v1.2       C120.4,48.9,121.8,51.4,118.7,51.4z"/>
				</g>
			</g>
			<rect x="73.3" y="7" class="st46" width="12.9" height="28.8"/>
			<polygon class="st46" points="105.8,28.8 92.9,28.8 92.9,9 105.8,13    "/>
			<polygon class="st46" points="66.9,28.8 54,28.8 54,13 66.9,9    "/>
			<rect x="73.3" y="5" class="st38" width="12.9" height="28.8"/>
			<polygon class="st38" points="105.8,26.8 92.9,26.8 92.9,7 105.8,11    "/>
			<polygon class="st38" points="66.9,26.8 54,26.8 54,11 66.9,7    "/>
		</g>
		<g>
			<path class="st1" d="M39.1,126.4l-10.8-14.5c1.2-2,1.1-4.9-0.4-6.9c-1.5-2-4-2.8-6.4-2.2l3.2,4.2c0.4,0.5,0.3,1.2-0.2,1.6     l-1.8,1.4c-0.5,0.4-1.2,0.3-1.6-0.2l-3.2-4.2c-1.4,2.1-1.4,4.7,0.2,6.7c1.5,2,4.3,2.9,6.6,2.3l10.8,14.5c-1.2,2-1.1,4.9,0.4,6.9     c1.5,2,4,2.8,6.4,2.2l-3.2-4.2c-0.4-0.5-0.3-1.2,0.2-1.6l1.9-1.3c0.5-0.4,1.2-0.3,1.6,0.3l3.2,4.2c1.4-2.1,1.4-4.7-0.2-6.7     C44.2,126.7,41.4,125.8,39.1,126.4z"/>
			<g>
				<polygon class="st38" points="137.6,77.8 131.9,103.2 122,100.9 127.6,75.7 134.9,67.3     "/>
				<path class="st47" d="M122,100.9l-1.2,5.5c-0.1,0.6,0.2,1.2,0.9,1.4l7.7,1.7c0.6,0.1,1.2-0.2,1.4-0.9l1.2-5.5L122,100.9z"/>
				<polygon class="st46" points="127.7,75.6 130.2,77.8 124.7,101.5 122,100.9     "/>
				<polyline class="st46" points="129.3,102.6 134.7,78.9 137.7,77.8 132.8,101.5     "/>
				<polygon class="st48" points="130.2,77.8 132.9,76.1 134.6,78.8 137.7,77.8 134.9,67.3 127.7,75.6     "/>
			</g>
			<ellipse transform="matrix(0.849 -0.5284 0.5284 0.849 -60.8578 34.8795)" class="st3" cx="30.6" cy="123.9" rx="3.4" ry="6"/>
			<ellipse transform="matrix(0.2148 -0.9766 0.9766 0.2148 5.0231 208.0708)" class="st3" cx="131.9" cy="100.9" rx="6" ry="3.4"/>
		</g>
		<polygon class="st9" points="131.8,71.2 136.3,71.9 135.2,67.3   "/>
	</g>
</g>
</svg>FR<b>MANAGER</b>',

    // Show / hide breadcrumbs on admin panel pages.
    'breadcrumbs' => true,

    // Horizontal navbar classes. Helps make the admin panel look similar to your project's design.
    'header_class' => 'app-header bg-light border-0 navbar',
    // For background colors use: bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
    // For links to be visible on different background colors use: "navbar-dark", "navbar-light", "navbar-color"

    // ----
    // BODY
    // ----

    // Body element classes.
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    // Try sidebar-hidden, sidebar-fixed, sidebar-compact, sidebar-lg-show

    // Sidebar element classes.
    'sidebar_class' => 'sidebar sidebar-pills bg-light',
    // Remove "sidebar-transparent" for standard sidebar look
    // Try "sidebar-light" or "sidebar-dark" for dark/light links
    // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

    // ------
    // FOOTER
    // ------

    // Footer element classes.
    'footer_class' => 'app-footer d-print-none',
    // hide it with d-none
    // change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white

    // Developer or company name. Shown in footer.
    'developer_name' => 'Ernesto Muniz',

    // Developer website. Link in footer. Type false if you want to hide it.
    'developer_link' => 'https://github.com/ErnestoMuniz',

    // Show powered by Laravel Backpack in the footer? true/false
    'show_powered_by' => false,

    // -------
    // SCRIPTS
    // -------

    // JS files that are loaded in all pages, using Laravel's asset() helper
    'scripts' => [
        // Backstrap includes jQuery, Bootstrap, CoreUI, PNotify, Popper
        'packages/backpack/base/js/bundle.js',

        // examples (everything inside the bundle, loaded from CDN)
        // 'https://code.jquery.com/jquery-3.4.1.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        // 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        // 'https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
        // 'https://unpkg.com/sweetalert/dist/sweetalert.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js'

        // examples (VueJS or React)
        // 'https://unpkg.com/vue@2.4.4/dist/vue.min.js',
        // 'https://unpkg.com/react@16/umd/react.production.min.js',
        // 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js',
    ],

    // JS files that are loaded in all pages, using Laravel's mix() helper
    'mix_scripts' => [// file_path => manifest_directory_path
        // 'js/app.js' => '',
    ],

    // -------------
    // CACHE-BUSTING
    // -------------

    // All JS and CSS assets defined above have this string appended as query string (?v=string).
    // If you want to manually trigger cachebusting for all styles and scripts,
    // append or prepend something to the string below, so that it's different.
    'cachebusting_string' => \PackageVersions\Versions::getVersion('backpack/crud'),

    /*
    |--------------------------------------------------------------------------
    | Registration Open
    |--------------------------------------------------------------------------
    |
    | Choose whether new users/admins are allowed to register.
    | This will show the Register button on the login page and allow access to the
    | Register functions in AuthController.
    |
    | By default the registration is open only on localhost.
    */

    'registration_open' => env('BACKPACK_REGISTRATION_OPEN', env('APP_ENV') === 'local'),

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    // You can make sure all your URLs use this prefix by using the backpack_url() helper instead of url()
    'route_prefix' => '',

    // The web middleware (group) used in all base & CRUD routes
    // If you've modified your "web" middleware group (ex: removed sessions), you can use a different
    // route group, that has all the the middleware listed below in the comments.
    'web_middleware' => 'web',
    // Or you can comment the above, and uncomment the complete list below.
    // 'web_middleware' => [
    //     \App\Http\Middleware\EncryptCookies::class,
    //     \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    //     \Illuminate\Session\Middleware\StartSession::class,
    //     \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    //     \App\Http\Middleware\VerifyCsrfToken::class,
    // ],

    // Set this to false if you would like to use your own AuthController and PasswordController
    // (you then need to setup your auth routes manually in your routes.php file)
    // Warning: if you disable this, the password recovery routes (below) will be disabled too!
    'setup_auth_routes' => true,

    // Set this to false if you would like to skip adding the password recovery routes
    // (you then need to manually define the routes in your web.php)
    'setup_password_recovery_routes' => true,

    // Set this to false if you would like to skip adding the dashboard routes
    // (you then need to overwrite the login route on your AuthController)
    'setup_dashboard_routes' => true,

    // Set this to false if you would like to skip adding "my account" routes
    // (you then need to manually define the routes in your web.php)
    'setup_my_account_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

    // Fully qualified namespace of the User model
    'user_model_fqn' => config('auth.providers.users.model'),
    // 'user_model_fqn' => App\User::class, // works on Laravel <= 7
    // 'user_model_fqn' => App\Models\User::class, // works on Laravel >= 8

    // The classes for the middleware to check if the visitor is an admin
    // Can be a single class or an array of classes
    'middleware_class' => [
        App\Http\Middleware\CheckIfAdmin::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        // \Backpack\CRUD\app\Http\Middleware\UseBackpackAuthGuardInsteadOfDefaultAuthGuard::class,
    ],

    // Alias for that middleware
    'middleware_key' => 'admin',
    // Note: It's recommended to use the backpack_middleware() helper everywhere, which pulls this key for you.

    // Username column for authentication
    // The Backpack default is the same as the Laravel default (email)
    // If you need to switch to username, you also need to create that column in your db
    'authentication_column'      => 'email',
    'authentication_column_name' => 'Email',

    // The guard that protects the Backpack admin panel.
    // If null, the config.auth.defaults.guard value will be used.
    'guard' => 'web',

    // The password reset configuration for Backpack.
    // If null, the config.auth.defaults.passwords value will be used.
    'passwords' => 'backpack',

    // What kind of avatar will you like to show to the user?
    // Default: gravatar (automatically use the gravatar for their email)
    // Other options:
    // - placehold (generic image with their first letter)
    // - example_method_name (specify the method on the User model that returns the URL)
    'avatar_type' => 'gravatar',

    /*
    |--------------------------------------------------------------------------
    | Theme (User Interface)
    |--------------------------------------------------------------------------
    */
    // Change the view namespace in order to load a different theme than the one Backpack provides.
    // You can create child themes yourself, by creating a view folder anywhere in your resources/views
    // and choosing that view_namespace instead of the default one. Backpack will load a file from there
    // if it exists, otherwise it will load it from the default namespace ("backpack::").

    'view_namespace' => 'backpack::',

    // EXAMPLE: if you create a new folder in resources/views/vendor/myname/mypackage,
    // your namespace would be the one below. IMPORTANT: in this case the namespace ends with a dot.
    // 'view_namespace' => 'vendor.myname.mypackage.',

    /*
    |--------------------------------------------------------------------------
    | File System
    |--------------------------------------------------------------------------
    */

    // Backpack\Base sets up its own filesystem disk, just like you would by
    // adding an entry to your config/filesystems.php. It points to the root
    // of your project and it's used throughout all Backpack packages.
    //
    // You can rename this disk here. Default: root
    'root_disk_name' => 'root',

    /*
    |--------------------------------------------------------------------------
    | License Code
    |--------------------------------------------------------------------------
    |
    | If you, your employer or your client make money by using Backpack, you need
    | to purchase a license. A license code will be provided after purchase,
    | which you can put here or in your ENV file in staging & production.
    |
    | More info and payment form on:
    | https://www.backpackforlaravel.com
    |
    */

    'license_code' => env('BACKPACK_LICENSE', false),
];
