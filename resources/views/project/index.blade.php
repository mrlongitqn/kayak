@include('layout.master')
@include('layout.header')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <!--RESPONSIBLE TRAVEL PROJECTS-->
        @if(!empty($projects))
            @foreach($projects as $project)
        <div class="row">
            <div class="col-md-12 animate-box">
                <h2 class="heading-title">{{$project['Name']}}</h2>
            </div>
            <div class="col-md-8 animate-box">
                <p>{{$project['Intro']}}</p>
                <p>{{$project['Content']}}</p>
            </div>
            <div class="col-md-4 animate-box">
                <iframe width="100%" height="250px" src="{{$project['video']}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="clearfix"></div>
            @endforeach
        @endif

    </div>
</div>
@include('layout.footer')
