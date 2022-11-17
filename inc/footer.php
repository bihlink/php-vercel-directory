<div class="col-lg-12">
  <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
          <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <a href="https://www.facebook.com/bihlink.portal" role="button" rel="nofollow noopener noreferrer"><i class="bi bi-facebook" style="font-size: 2rem; color: blue;"></i></a>
              <a href="https://nitter.bihlink.com/abidnev"><i class="bi bi-twitter" style="font-size: 2rem; color: #55acee;"></i></a>
              <a href="https://reddit.bihlink.com/r/bihlink"><i class="bi bi-reddit" style="font-size: 2rem; color: #dd4b39;"></i></a>
              <a href="https://www.instapaper.com/p/anwebservices" role="button" rel="nofollow noopener noreferrer"><i class="bi bi-instagram" style="font-size: 2rem; color: #ac2bac;"></i></a>
              <a href="https://www.linkedin.com/in/abid-nevesinjac/" role="button" rel="nofollow noopener noreferrer"><i class="bi bi-linkedin" style="font-size: 2rem; color: #0082ca;"></i></a>
              <a href="https://www.pinterest.com/xabid/" role="button" rel="nofollow noopener noreferrer"><i class="bi bi-pinterest" style="font-size: 2rem; color: #cc0000;"></i></a>
            </section>
            <!-- Section: Social media -->
          </div>
          <h5 class="text-uppercase"><?= $seotitle; ?></h5>
          <p><?= $seodesc; ?></p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><i class="bi bi-heart-fill"></i> Explore <?= $seotitle; ?></h5>

          <ul class="list-unstyled mb-0">
            <li>
              <i class="bi bi-postcard"></i> <a href="#!">O BiH Link-u</a>
            </li>
            <li>
              <i class="bi bi-envelope"></i> <a href="#">Kontakt</a>
            </li>
            <li>
              <i class="bi bi-rss"></i> <a href="<?= $rooturl; ?>/feed/">RSS Feed</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0"><i class="bi bi-diagram-3-fill"></i> Our Network</h5>

          <ul class="list-unstyled">
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://bihlink.com" rel="me" target="_blank">BiH Link</a>
            </li>
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://abid.cc" rel="me" target="_blank">Abid's Place</a>
            </li>
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://upvo.me" rel="me" target="_blank">Social Bookmarks</a>
            </li>
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://coki.me" rel="me" target="_blank">URL Shortener</a>
            </li>
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://seolads.com" rel="me" target="_blank">SEO & SMM Marketplace</a>
            </li>
            <li>
              <i class="bi bi-link-45deg"></i> <a href="https://my.coki.me" rel="me" target="_blank">Create Digital Business Card</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © <?php echo date("Y"); ?> Development By 
      <a href="https://xabid.com/" rel="me" target="_blank">Abid Nevesinjac</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
