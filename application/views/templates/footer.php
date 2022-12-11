    <footer class="main-footer py-5 bg-footer">
      <div class="container-fuild d-flex flex-row align-items-center justify-content-between px-5">
        <div class="flex-column align-items-start">
          <h1 class="mb-4" style="font-weight: bold;">Base Camp Kami</h1>
          <div id="map" style="float: left;width: 600px;height: 400px;"></div>
        </div>

        <div class="d-flex flex-column align-items-end justify-content-around">
          <div class="d-flex flex-row align-items-center my-4">
            <img src="<?= base_url() ?>assets/images/demo/shards-logo.svg" alt="Example Navbar 1" class="pr-3" height="50">
            <p class="m-0" style="font-size: 48px; font-weight: normal; color: black;">GO-GRAB</p>
          </div>
          
          <ul class="navbar-nav d-flex flex-row align-items-center justify-content-between my-4">
            <li class="nav-item mx-3 px-3">
              <a href="" class="nav-link" style="font-size: 20px; font-weight: bold; color: white;">HOME</a>
            </li>
            <li class="nav-item mx-3 px-3">
              <a href="" class="nav-link" style="font-size: 20px; font-weight: bold; color: white;">GROB-BIKE</a>
            </li>
            <li class="nav-item mx-3 px-3">
              <a href="" class="nav-link" style="font-size: 20px; font-weight: bold; color: white;">GROB-FOOD</a>
            </li>
            <li class="nav-item mx-3 px-3">
              <a href="" class="nav-link" style="font-size: 20px; font-weight: bold; color: white;">MY-ORDER</a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-muted text-center small p-0 mb-4">&copy; Copyright 2022 — BSI NGo-jol Bareng</p>
      <div class="social d-table mx-auto">
        <a class="twitter mx-3 h4 d-inline-block text-secondary" href="#">
          <i class="fa fa-twitter"></i>
          <span class="sr-only">View our Twitter Profile</span>
        </a>
        <!-- target="_blank"--> 
        <a class="facebook mx-3 h4 d-inline-block text-secondary" href="#">
          <i class="fa fa-facebook"></i>
          <span class="sr-only">View our Facebook Profile
            <span>
        </a>
        <a class="github mx-3 h4 d-inline-block text-secondary" href="#">
          <i class="fa fa-instagram"></i>
          <span class="sr-only">View our Instagram Profile</span>
        </a>
      </div>
    </footer>
    
  </div>

  <!-- DELETE FORM -->
  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title custom-font" id="labelHapus"></h3>
              </div>
              <div class="modal-body" id="contentHapus">
              </div>
              <div class="modal-footer">
                  <button id="clickHapus" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Yes</button>

                  <button class="btn btn-danger btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> No</button>
              </div>
              <input type="hidden" id="idHapus" name="">
          </div>
      </div>
  </div>


  <!-- LOGOUT FORM -->
  <div class="modal fade" id="myLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-font">LOGOUT</h3>
            </div>
            <div class="modal-body">
              Are you sure  ?
            </div>
            <div class="modal-footer">
                <button id="clickLogout" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Yes</button>

                <button class="btn btn-danger btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> No</button>
            </div>
        </div>
    </div>
  </div>

  <!-- JavaScript--> 
  <div id="fb-root"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8AewbAt_4KU_32UGsdBZG3ITkVmw8pQA&libraries=places"></script>
  <script src="<?=base_url('assets/js/maps.js')?>"></script>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1662270373824826";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function out()
    {
      $('#myLogout').modal('toggle')
    }

    $(() =>
    {
      $('#clickLogout').on('click', () =>
      {
        window.location.href = '<?= base_url() ?>login/logout'
      })
    })


  </script>
</body>

</html>

