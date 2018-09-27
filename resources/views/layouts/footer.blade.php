<!-- Footer -->
@if (Route::has('login'))
@auth
<footer class="page-footer font-small mdb-color lighten-3 pt-4">
  <!-- Footer Elements -->
  <div class="container">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4" >
        <!--Image-->
 <!--        <div class="view overlay z-depth-1-half" >
          <a href="javascript:void(0);"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid" alt="" onclick="changeimg(this.src)" id="clk1"></a>
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div> -->

      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">
        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="/images/laravel.jpg" class="img-fluid" alt="" id="img2" onclick="changeimg(this.src)">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">
        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="/images/think.jpeg" class="img-fluid" alt="" id="img3" onclick="changeimg(this.src)">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="/images/diff.jpg" class="img-fluid" alt="" id="img4" onclick="changeimg(this.src)">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="/images/code-ones.png" class="img-fluid" alt="" id="img5" onclick="changeimg(this.src)">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
      <!--   <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid" alt="" id="img6" onclick="changeimg(this.src)">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div> -->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Last Login @ {{Auth::user()->last_login}} © 
    <a href="https://about.me/aswathyma" target="_blank">aswathy</a>
  </div>
  <!-- Copyright -->
</footer>
@endauth
@endif
<!-- Footer -->