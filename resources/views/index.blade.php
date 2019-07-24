<!DOCTYPE html>
<html>
<head>
	<title>App Name</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ admin_design('bootstrap/css/bootstrap-rtl.min.css') }}">
   	<link rel="stylesheet" href="{{ admin_design('dist/css/AdminLTE-rtl.min.css') }}">
   	<link rel="stylesheet" href="{{ admin_design('dist/css/skins/_all-skins-rtl.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/style.css') }}">

</head>
<body>

	<section class="subscribe-area pb-50 pt-70">
		<div class="container">
			<div class="row">

				<div class="col-md-4">
					<div class="subscribe-text mb-15">

					</div>
				</div>
				<div class="col-md-8">
					<div class="subscribe-wrapper subscribe2-wrapper mb-15">
						<div class="subscribe-form">
							<form action="">
								<input name="search" placeholder="قم بأدخال اسم الطالب او البريد الخاص به" type="text">
								<button type="submit">بحث <i class="fas fa-long-arrow-alt-right"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<div class="container" style="margin-top: 50px;direction: rtl;">
		<div class="row">
	        <div class="span12" style="text-align: right;">
	    		<ul class="thumbnails">
	    			@forelse($users as $user)
		                <li class="span5 clearfix" style="float: left;margin-left: 30px;">
		                  <div class="thumbnail clearfix" style="width: 490px;">
		                    <img src="{{ asset('public/upload/users/default.png') }}" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
		                    <div class="caption" class="pull-left clearfix">


		                      <h4>

		                      	<b>@lang('user::user.full_name') : </b>

		                      	<a href="#" >{{ $user->full_name }}</a>
		                      </h4>

		                      <div>

		                      	<b>@lang('user::user.level') : </b>

		                      	<a href="#" >{{ $user->level }}</a>
		                      </div>

		                      <div>

		                      	<b>@lang('user::user.phone') : </b>

		                      	<a href="#" >{{ $user->phone }}</a>
		                      </div>

		                      <small>

		                      	<b>@lang('user::user.status') : </b>
		                      	<span class="text text-center text-info" style="margin-left: 10px;font-size: 20px">
			                      	@if($user->status == '')

			                      		{{ 'لم يحدد' }}
			                      	@else
			                      		{{ trans('user::user.' . $user->status) }}
			                      	@endif
		                     	</span>
		                      </small>
		                    </div>
		                  </div>
		                </li>

		            @empty

		            	<li style="width: 1000px;text-align: center" class="alert alert-info">لا يوجد داتا</li>

	                @endforelse
	            </ul>
	            @if($users)
	            	{{ $users->appends( request()->query() )->links() }}
	            @endif
	        </div>
		</div>
</div>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

</body>
</html>