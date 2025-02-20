@extends('master') {{-- Le contenu de master.blade.php est appelé  --}}
@section('title', 'À propos') {{-- Le titre de cette page est créé --}}
@section('content') {{-- Le contenu du content est inclus dans la section à cette effet sur le master --}}
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Notre mission est de créer un son à la hauteur de chaque artiste</h1>
                    <p class="lead fw-normal text-muted mb-4">Notre mission est d’accompagner les musiciens, chanteurs et créateurs sonores en leur offrant un cadre professionnel où leurs idées prennent vie. De l’enregistrement au mastering, en passant par la production et le coaching artistique, nous mettons tout en œuvre pour révéler le plein potentiel de chaque projet.</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Lisez notre histoire</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="assets/about-recording.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Passion &amp; Créativité</h2>
                <p class="lead fw-normal text-muted mb-0">La musique est au cœur de tout ce que nous faisons. Chaque production est une nouvelle aventure où nous explorons et innovons pour offrir un son unique et authentique.</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="assets/blog-studio.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Excellence &amp; qualité</h2>
                <p class="lead fw-normal text-muted mb-0">Nous nous engageons à fournir un travail de haute qualité, en utilisant du matériel de pointe et en perfectionnant chaque détail pour garantir un rendu professionnel.</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Notre équipe</h2>
            <p class="lead fw-normal text-muted mb-5">Dédiée à un service de qualité et votre succès</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets/author-01.jpg" alt="..." />
                    <h5 class="fw-bolder">Ibbie Eckart</h5>
                    <div class="fst-italic text-muted">Founder &amp; CEO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets/author-02.jpg" alt="..." />
                    <h5 class="fw-bolder">Arden Vasek</h5>
                    <div class="fst-italic text-muted">CFO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets/author-03.jpg" alt="..." />
                    <h5 class="fw-bolder">Toribia Nerthus</h5>
                    <div class="fst-italic text-muted">Operations Manager</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets/author-04.jpg" alt="..." />
                    <h5 class="fw-bolder">Malvina Cilla</h5>
                    <div class="fst-italic text-muted">CTO</div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection {{-- Ceci est la fin de section content --}}