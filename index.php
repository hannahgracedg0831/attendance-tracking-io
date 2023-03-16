<?php include 'components/index-header.php'; ?>

<style>
#btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
}
</style>

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
          <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1><em class="yellow">Nueva Ecija University of Science and Technology Papaya Off-Campus </em><em class="blue">QR-Code Based Attendance System
            </em></h1>
          </div>
        </section>
        <!-- End Hero -->

        </div>
    </div>

    <?php include 'components/index-footer.php'; ?>

<!-- Back to top button -->
<button
        type="button"
        class="btn btn-warning btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

    <script>
      //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
