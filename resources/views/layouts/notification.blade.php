@if($errors->any())
	@if($errors->all()[0] != 'empty')
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
			<strong>Error!</strong> <br/>

			@foreach ($errors->all() as $error)
			- {{ $error }} <br/>
			@endforeach
		</div>
	@endif
@endif

@if(Session::has('exception'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
		<?php $e = Session::get('exception'); ?>
		<strong>Error ({{$e['exception']}}</strong> <br/>
		<i>{{$e['error']}}</i><br/>
		<span>{{$e['message']}}</span>
	</div>
	<?php Session::forget('exception'); ?>
@endif

@if(session()->exists('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
		<strong>Success!</strong><br/>

		@foreach(session('success') as $s)
		- {!! $s !!} <br/>
		@endforeach
	</div>
	<?php Session::forget('success'); ?>
@endif

@if(Session::has('warning'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
		<strong>Warning!</strong> <br/>
		@foreach(Session::get('warning') as $w)
		- <?php echo $w; ?> <br/>
		@endforeach

	</div>
	<?php Session::forget('warning'); ?>
@endif
