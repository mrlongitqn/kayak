<footer>
    <div id="footer">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-4 col-sm-4 col-xs-12 fh5co-footer-link">
                    <h3>Tour Collections</h3>
                    <ul>
                        @foreach($tour_collections as $item)
                            <li>
                                <a href="{{$item->link}}">{{$item->name}}</a>

                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 fh5co-footer-link">
                    <h3> Tour Services</h3>
                    <ul>
                        @foreach($tour_services as $item)
                            <li>
                                <a href="{{$item->link}}">{{$item->name}}</a>

                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 fh5co-footer-link">
                    <h3>CONTACT US</h3>
                    <table>
                        <tr>
                            <td>Email:</td>
                            <td>{{$config_data->contact_email}}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$config_data->contact_email2}}</td>
                        </tr>
                        <tr>
                            <td>Hotline:</td>
                            <td>{{$config_data->contact_phone}}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$config_data->contact_phone2}}</td>
                        </tr>
                        <tr>
                            <td valign="top">Address:</td>
                            <td>{!! $config_data->contact_add !!}
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="{{asset('')}}js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('')}}js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('')}}js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('')}}js/jquery.waypoints.min.js"></script>
<script src="{{asset('')}}js/sticky.js"></script>

<!-- Stellar -->
<script src="{{asset('')}}js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="{{asset('')}}js/hoverIntent.js"></script>
<script src="{{asset('')}}js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('')}}js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="{{asset('')}}js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{asset('')}}js/classie.js"></script>
<script src="{{asset('')}}js/selectFx.js"></script>

<!-- Main JS -->
<script src="{{asset('')}}js/main.js"></script>

</body>

</html>