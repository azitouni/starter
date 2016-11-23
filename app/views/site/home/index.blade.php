@extends('site.layouts.default')

{{-- Content --}}
@section('content')
@foreach ($posts as $post)

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navigation -->
			<nav class="navbar navbar-nav navbar-brand">
				<div class="" style="background-color:red;height:300px;width:100%;">

				</div>
			</nav>
			<!-- section -->
			<section>
				<div class="" style="background-color:blue;height:300px;width:100%;">

				</div>
			</section>
			<!-- footer -->
			<footer>
				<div class="" style="background-color:green;height:300px;width:100%;">

				</div>
			</footer>
		</div>
	</div>
</div>
<hr />
@endforeach

{{ $posts->links() }}

@stop
