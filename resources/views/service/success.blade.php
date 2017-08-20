@include('layout.master')
@include('layout.header')
<div class="container">
    <div class="col-md-12">
        <div class="title title--big title--center title--decoration-bottom-center">

            <h3 class="title__primary">Book service successfully</h3>
            <p>
                Thank you. We will contact you soon.<br/>
            </p>
        </div>
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
@include('layout.footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>