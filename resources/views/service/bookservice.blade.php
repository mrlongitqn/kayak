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
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Email address</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email" placeholder="Email address" value="{{ old('email') }}" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Confirm email</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email-confirm" placeholder="Confirm email"
                                       name="email_confirmation" value="{{ old('email_confirmation') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="phone">Phone number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading-line">Car rental form</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="route">Route</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="route" name="route">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Date of service (dd/mm/yy):</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="datepicker1" placeholder="Date of service"
                                       name="date_of_service" value="{{ old('date_of_service') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Places of pick up</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder=Places of pick up"
                                       name="places_of_pick_up" value="{{ old('places_of_pick_up') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Time of pick up</label>
                            <div class="col-sm-7">
                                <div class='input-group date'>
                                    <input name="time_of_pick_up"  id='timepicker1' type='text' class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Number of Adults</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="number_of_adults" placeholder="Number of Adults"
                                       name="number_of_adults" value="{{ old('number_of_adults') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email">Number of children (under 10  years old)

                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="number_of_children"
                                       placeholder="Number of children (under 10  years old)"
                                       name="number_of_children" value="{{ old('number_of_children') }}">
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
            'timeFormat': 'g:ia',
            'scrollDefault': 'now'
        });

        $('#datepicker1').datepicker({
            'format': 'yyyy-m-d',
            'autoclose': true
        });
    });
</script>
