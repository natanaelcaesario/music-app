 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
     <div class="container-fluid px-5">
         <a class="navbar-brand fw-normal" href="/">Music Rental Application</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="bi-list"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                 <li hidden class="nav-item"><a class="nav-link me-lg-3" href="http://natanael-caesario-pasaribu.gitbook.io/welcome-to-gitbook/">Cara Sewa</a></li>
             </ul>
             <a hidden href="<?= base_url('auth/login') ?>" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                 <span class="d-flex align-items-center">
                     <i class="bi bi-door-open-fill me-2"></i>
                     <span class="small">Login / Sign Up</span>
                 </span>
             </a>
             <a href="<?= base_url('auth/profil') ?>" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                 <span class="d-flex align-items-center">
                     <i class="bi bi-person-circle"></i>
                     <span class="small"> &nbsp; &nbsp; Natanael Caesario</span>
                 </span>
             </a>
         </div>
     </div>
 </nav>