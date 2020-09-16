@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	    <div class="col-3 p-9">
			<img src="/svg/onlinelogomaker-083120-1934-8578.svg">
		</div>	
		<div class="col-9 pt-5">
			<div style="color: #DDDDDD;"><h1>{{ $user->profile->title }}</h1></div>
			<div>{{ $user->profile->description }}</div>
			<div><a href="#">{{ $user->profile->url }}</a></div>
			<div class="d-flex">
				<div style="color: #DDDDDD;"><strong>8</strong> Top-5 Running Finishes since 2015</div>
				<div style="color: #DDDDDD;" class="pl-3"><strong>86,929 ft</strong> Jan-Sep Elevation Gain </div>
				<div style="color: #DDDDDD;" class="pl-3"><strong>53 mi</strong> Avg Dist/Week</div>
			</div>
			<div class="pt-4">
				<a href="https://nutritionstudies.org/courses/plant-based-nutrition/" title="Plant-based Nutrition Certificate Badge"><img src="https://nutritionstudies.org/images/graduate-badge.png" width="250"/>
				<div>Plant-Based Nutrition Certificate, Completed (August, 2020), T. Colin Campbell Center for Nutrition Studies and eCornell
				</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row pt-5">
		<div class="col-4">
			<img src="/jpg/Profile Pic.jpg" style="height: 300px"></img>
		</div>
		<div class="col-4">
			<img src="/jpg/IMG-0089.jpg" style="height: 300px"></img>
		</div>
		<div class="col-4 pl-5">
			<img src="/jpg/IMG-0097.jpg" style="height: 300px"></img>
		</div>
	</div>
</div>
@endsection
