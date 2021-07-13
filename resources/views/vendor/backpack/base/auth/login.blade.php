@extends(backpack_view('layouts.plain'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card-group">
                <div class="card p-4">
                  <div class="card-body">
                    <h1>Login</h1>
                    <p class="text-muted">Sign In to your account</p>
                    <form class="p-t-10" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                        {!! csrf_field() !!}
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="las la-user"></i>
                                </span>
                              </div>
                                <input placeholder="Username" type="text" class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">

                                @if ($errors->has($username))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first($username) }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">

                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="las la-key"></i>
                                </span>
                              </div>
                                <input placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    {{ trans('backpack::base.login') }}
                                </button>
                            </div>
                            @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))
                                <div class="text-right col-6 align-middle"><a href="{{ route('backpack.auth.password.reset') }}">Forgot Password?</a></div>
                            @endif
                        </div>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-center">
                    <svg width="150px" style="margin-top: 4em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 160 160" style="enable-background:new 0 0 160 160;" xml:space="preserve">
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
                    </svg>
                    <img width="250" src="data:image/png;base64,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">
                  </div>
                </div>
            </div>
            @if (config('backpack.base.registration_open'))
                <div class="text-center"><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>
            @endif
        </div>
    </div>
@endsection
