@include('layout.master')
@include('layout.header')
<div class="container">
    <div class="col-sm-12 animate-box">
        <div class="title title--big title--center title--decoration-bottom-center">

            <h4 class="title__primary">{{$tour_name}}</h4>
        </div>
    </div>
    {{--@if ( $errors->any() )--}}
        {{--<div class="col-xs-12">--}}
            {{--<div class="alert alert-danger alert-dismissible">--}}
                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                {{--<h4><i class="icon fa fa-ban"></i> Alert!</h4>--}}
                {{--<ul>--}}
                    {{--@if($errors->has('fullname'))--}}
                        {{--{{ $errors->first('fullname') }}--}}
                    {{--@endif--}}

                    {{--@foreach($errors->getMessages() as $key => $message)--}}
                        {{--{{$key}} = {{$message}}--}}
                    {{--@endforeach--}}

                    {{--@foreach ($errors as $error)--}}
                       {{--{{$error}}--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--@endif--}}
    <div class="col-sm-offset-1 col-sm-10">
        <div class="col-sm-12">
            <form class="form-horizontal animate-box" action="" method="post">

                {{ csrf_field() }}
                <div class="col-md-12">
                    <h3 class="heading-line">Traveler information</h3>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Full name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="uname" value="{{ old('fullname') }}" placeholder="Full name" name="fullname">
                    <label style="color: red; font-size: 13px"> @if($errors->has('fullname'))
                            {{ $errors->first('fullname') }}
                        @endif</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Email address</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="email" placeholder="Email address" value="{{ old('email') }}" name="email">
                        <label style="color: red; font-size: 13px"> @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Confirm email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="email-confirm" placeholder="Confirm email"
                               name="email_confirmation" value="{{ old('email_confirmation') }}">
                        <label style="color: red; font-size: 13px"> @if($errors->has('email_confirmation'))
                                {{ $errors->first('email_confirmation') }}
                            @endif</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="phone">Phone number</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" value="{{ old('phone') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('phone'))
                                {{ $errors->first('phone') }}
                            @endif
                        </label>

                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="heading-line">Trip Information</h3>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Tour name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="tour_name" placeholder="Tour name" name="tour_name"
                               value="{{$tour_name}}" disabled="disabled">

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Would you like to go on a</label>
                    <div class="col-sm-7">
                        <div class="radio-inline">
                            <label><input type="radio" name="would_you_like_to_go_on_a" value="private" checked >private</label>
                        </div>
                        <div class="radio-inline">
                            <label><input type="radio" name="would_you_like_to_go_on_a" value="join group">join group</label>
                        </div>
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('would_you_like_to_go_on_a'))
                            {{ $errors->first('would_you_like_to_go_on_a') }}
                            @endif
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Desired start date</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" id="desired_start_date" placeholder="Desired start date"
                               name="desired_start_date" value="{{ old('desired_start_date') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('desired_start_date'))
                            {{ $errors->first('desired_start_date') }}
                            @endif
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Number of Adults</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="number_of_adults" placeholder="Number of Adults"
                               name="number_of_adults" value="{{ old('number_of_adults') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('number_of_adults'))
                            {{ $errors->first('number_of_adults') }}
                            @endif
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Number of children under 4 years old</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="number_of_children_under4years_old"
                               placeholder="Number of children under 4 years old"
                               name="number_of_children_under4years_old" value="{{ old('number_of_children_under4years_old') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('number_of_children_under4years_old'))
                            {{ $errors->first('number_of_children_under4years_old') }}
                            @endif
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Number of children from 4 years old to 10 years
                        old
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="number_of_children_over4years_old"
                               placeholder="Number of children from 4 years old to 10 years old"
                               name="number_of_children_over4years_old" value="{{ old('number_of_children_over4years_old') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('number_of_children_over4years_old'))
                            {{ $errors->first('number_of_children_over4years_old') }}
                            @endif
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Any special requests on food, program schedule,
                        physical level, etc..
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="any_special_requests"
                               placeholder="Any special requests on food, program schedule, physical level, etc.."
                               name="any_special_requests" value="{{ old('any_special_requests') }}">
                        <label style="color: red; font-size: 13px">
                            @if($errors->has('any_special_requests'))
                            {{ $errors->first('any_special_requests') }}
                            @endif
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-7">
                        <button type="submit" class="btn btn-default">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
@include('layout.footer')
