@include('layout.master')
@include('layout.header')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="title title--big title--center title--decoration-bottom-center">
            <h3 class="title__primary">RESPONSIBLE TRAVEL PROJECTS</h3>
        </div>
        <!--RESPONSIBLE TRAVEL PROJECTS-->
        @if(!empty($projects))
            @foreach($projects as $project)
        <div class="row">
            <div class="col-md-12 animate-box">
                <h2 class="heading-title">{{$project['name']}}</h2>
            </div>
            <div class="col-md-8 animate-box">
                <p>{{$project['intro']}}</p>
                <div>
                    <a class="pull-right" href="{{url('projects/detail/'.$project['id'])}}"><img height="40px" src="{{asset('images/readmore.png')}}" /> </a>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <iframe width="100%" height="250px" src="{{$project['videos']}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="clearfix"></div>
            @endforeach
        @endif

    </div>
</div>
@include('layout.footer')
