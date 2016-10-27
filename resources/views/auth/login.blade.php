@extends('backend.template')
@section('main')

<div class="account-pages"></div>
		<div class="clearfix"></div>

		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center">{{ trans('front/login.login') }} to <strong class="text-custom">UBold</strong></h3>
				</div>

				<div class="panel-body">
				@if(session()->has('error'))
                    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                @endif
					<form class="form-horizontal m-t-20" action="{{ url('login') }}" method="post">
            {!! csrf_field() !!}
						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="email/username" name="log" value="{{ old('log') }}" autofocus="">
								@if ($errors->has('log'))
										<span class="help-block">
												<strong>{{ $errors->first('log') }}</strong>
										</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" name="password" value="{{ old('password') }}" placeholder="Password">
								@if ($errors->has('password'))
										<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
										</span>
								@endif
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox" name="memory">
									<label for="checkbox-signup"> Remember me </label>
								</div>

							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
									Log In
								</button>
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12">
								{!! link_to('password/reset', 'Forgot your password?', array('class' => 'text-dark',) )!!}
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12 text-center">
								<h4><b>Sign in with</b></h4>
							</div>
						</div>

						<div class="form-group m-b-0 text-center">
							<div class="col-sm-12">
								<button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
		                           <i class="fa fa-facebook m-r-5"></i> Facebook
		                        </button>

		                        <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
		                           <i class="fa fa-twitter m-r-5"></i> Twitter
		                        </button>

		                        <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
		                           <i class="fa fa-google-plus m-r-5"></i> Google+
		                        </button>
							</div>
						</div>
					</form>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						Don't have an account? {!! link_to('register', 'Sign Up', array('class' => 'text-primary m-l-5',) )!!}
					</p>
				</div>
			</div>

		</div>


@endsection
