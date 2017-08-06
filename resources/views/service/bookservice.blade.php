@include('layout.master')
@include('layout.header')
<div id="fh5co-tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <h3 class="title__primary">SERVICES</h3>
                </div>
            </div>
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
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('fullname'))
                                        {{ $errors->first('fullname') }}
                                    @endif
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Email address</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="Email address" value="{{ old('email') }}" name="email">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Confirm email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email-confirm" placeholder="Confirm email"
                                       name="email_confirmation" value="{{ old('email_confirmation') }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('email_confirmation'))
                                        {{ $errors->first('email_confirmation') }}
                                    @endif
                                </label>
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
                            <h3 class="heading-line">Car rental form</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="route">Route</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="route" name="route">
                                    @if(!empty($service_car))
                                        @foreach($service_car  as $route)
                                            <option value="{{$route->id}}">{{$route->route}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('route'))
                                        {{ $errors->first('route') }}
                                    @endif
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Date of service (dd/mm/yy):</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="datepicker1" placeholder="Date of service"
                                       name="date_of_service" value="{{ old('date_of_service') }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('date_of_service'))
                                        {{ $errors->first('date_of_service') }}
                                    @endif
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Places of pick up</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Places of pick up"
                                       name="places_of_pick_up" value="{{ old('places_of_pick_up') }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('places_of_pick_up'))
                                        {{ $errors->first('places_of_pick_up') }}
                                    @endif
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Time of pick up</label>
                            <div class="col-sm-7">
                                <div class='input-group date'>
                                    <input name="time_of_pick_up"  value="{{ old('time_of_pick_up') }}"  id='timepicker1' type='text' class="form-control" placeholder="Time of pick up"/>
                                </div>
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('time_of_pick_up'))
                                        {{ $errors->first('time_of_pick_up') }}
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
                            <label class="control-label col-sm-5" for="email">Number of children (under 10  years old)

                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="number_of_children"
                                       placeholder="Number of children (under 10  years old)"
                                       name="number_of_children" value="{{ old('number_of_children') }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('number_of_children'))
                                        {{ $errors->first('number_of_children') }}
                                    @endif
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Your request

                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="any_special_requests"
                                       placeholder="Your request"
                                       name="your_request" value="{{ old('your_request') }}">
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
    </div>
</div>

@include('layout.footer')
<link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<script type="text/javascript">
    $(function() {
        $('#timepicker1').timepicker({
            'showDuration': true,
            'timeFormat': 'h:i A',
            'scrollDefault': 'now'
        });

        $('#datepicker1').datepicker({
            'format': 'yyyy-mm-dd',
            'autoclose': true
        });
    });
</script>
