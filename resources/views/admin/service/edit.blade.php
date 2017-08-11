@extends('admin.templates.master')
@section("content")
    <div class=" col-lg-12 col-md-12 col-sm-12">
        <div class="box box-primary">

            <div class="col-sm-10">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Service Car</h3>
                </div>
                <div class="col-sm-12">
                    <form class="form-horizontal animate-box" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="route">TRANSFER FROM</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="route" name="transfer_from">
                                    <option value="1" @if($data->transfer_from == 1) selected @endif>Da Nang</option>
                                    <option value="2" @if($data->transfer_from == 2) selected @endif>Hoi An</option>
                                </select>
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('transfer_from'))
                                        {{ $errors->first('transfer_from') }}
                                    @endif
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Route</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Route"
                                       name="route" value="{{ old('route',$data->route) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('route'))
                                        {{ $errors->first('route') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Distance</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Distance"
                                       name="distance" value="{{ old('distance',$data->distance) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('distance'))
                                        {{ $errors->first('distance') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Duration</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Duration"
                                       name="duration" value="{{ old('duration',$data->duration) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('duration'))
                                        {{ $errors->first('duration') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Price for 4-seat car</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Price for 4-seat car"
                                       name="price_4seat" value="{{ old('price_4seat',$data->price_4seat) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('price_4seat'))
                                        {{ $errors->first('price_4seat') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Price for 7-seat car</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Price for 7-seat car"
                                       name="price_7seat" value="{{ old('price_7seat',$data->price_7seat) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('price_7seat'))
                                        {{ $errors->first('price_7seat') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Price for 16-seat car</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="places_of_pick_up" placeholder="Price for 16-seat car"
                                       name="price_16seat" value="{{ old('price_16seat',$data->price_16seat) }}">
                                <label style="color: red; font-size: 13px">
                                    @if($errors->has('price_16seat'))
                                        {{ $errors->first('price_16seat') }}
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-7">
                                <button type="submit" class="btn btn-default">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop