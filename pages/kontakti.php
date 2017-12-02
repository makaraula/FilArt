<?php
  $title = 'Kontakti';
  $keywords = 'Kontakti';
  $description = 'Kontakti';
	include '../include/header.php';
?>

<div class="row page-pic white">
    <img class="intro-photo" src="../lib/plugins/thumb.php?src=../images/content-images/intro.jpg&w=1920&h=250&q=80&zc=1" alt="">
</div><!-- end of .page-pic -->

<div class="row white">
  <div class="wrapper">

    <div class="bread-crumbs fw">
        <ul>
            <li><a href="home.php">Početna</a></li>
            <li>Kontakti</li>
        </ul>
    </div><!-- end of .bread-crumbs -->
    <div class="content fw ptb90">

      <h1>Kontakti</h1>

      <div class="section group">

        <div class="col col_6 kontakt-info">
          <h2>F.I.L.-ART d.o.o.</h2>
          <p>film, marketing i zastupanje<br>
            Gajeva 5, 49 000 Krapina<br>
            <strong>tel:</strong> <a data-rel="external" href="tel:+38549300223">049 300 223</a> ili <a data-rel="external" href="tel:+38549300225">300 225</a><br>
            <strong>fax:</strong> 049 300 224<br>
            <strong>email:</strong> <a href="mailto:filartdoo@gmail.com">filartdoo@gmail.com</a></p>

          <p><strong>OIB:</strong> 77753342076<br>
            <strong>VAT:</strong> HR77753342076</p>

          <p><strong>Temeljni kapital:</strong> 88.200,00 kuna, uplaćen u cijelosti</p>
          <p><strong>Član uprave:</strong> Zdravko Hršak, direktor</p>
        </div><!-- end .kontakt-info -->

        <div class="col col_6">
          <div id="kontakt-forma" class="border">

            <form id="forma" name="forma" method="post" action="">

              <input name="ime_i_prezime" type="text" class="" id="" value="" placeholder="Ime i prezime *">

              <input name="email" type="text" class="" value="" placeholder="Email *">

              <textarea name="poruka" class="" id="poruka" cols="" rows="8" placeholder="Poruka"></textarea>

              <input name="kod" type="text"  class="" id="kod" placeholder="Zbrojite 7+5 *">


              <input type="submit" class="btn send" name="posalji_upit" value="Pošaljite poruku" />
            </form>

          </div><!-- end #kontakt-forma -->
        </div><!-- end .col_6 -->

      </div><!-- end .section -->

    </div><!-- end .content -->

  </div><!-- end .wrapper -->
</div><!-- end .row -->

<div class="row">
  <div id="map" class="map fw">

  </div><!-- end #map -->
</div><!-- end .row -->


<?php include '../include/footer.php';?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
      google.maps.event.addDomListener(window, 'load', init);

      function init() {
          var mapOptions = {
              zoom: 17,
              center: new google.maps.LatLng(46.163766,15.870982),
              styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
          };
          var mapElement = document.getElementById('map');
          var map = new google.maps.Map(mapElement, mapOptions);
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(46.163766,15.870982),
              map: map,
              icon: '../images/pin.png',
              title: 'F.I.L. Art d.o.o.'
          });
      }
  </script>
