@include('layout.master')
@include('layout.header')
<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-12">
                <h3 class="section-title">Thank you for your interest in SONG Adventure</h3>
                <p>Feel free to drop by our office located 3km from the town centre – 10 minutes by taxi or 20 minutes by bicycle.</p>
            </div>
            <div class="col-md-6">
                <h3 class="section-title">SONG ADVENTURE</h3>
                <ul class="contact-info">
                    <li><i class="icon-location-pin"></i>Thuan Tinh pier – Tran Nhan Tong street
                        Hamlet 2 – Cam Thanh village – Hoi An city
                        Quang Nam province, Vietnam</li>
                    <li><i class="icon-phone2"></i>+84 9 7943 7338</li>
                    <li><i class="icon-phone2"></i>+84 9 1664 5858</li>
                    <li><i class="icon-mail"></i><a href="#">hoiankayaktours@gmail.com</a></li>
                    <li><i class="icon-mail"></i><a href="#">info@hoiankayaktours.com</a></li>
                </ul>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhoiankayaktours&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div id="map" class="fh5co-map"></div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layout.footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>