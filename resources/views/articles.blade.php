@extends('master') {{-- Le contenu de master.blade.php est appelé  --}}
@section('title', 'Blogue') {{-- Le titre de cette page est créé --}}
@section('content') {{-- Le contenu du content est inclus dans la section à cette effet sur le master --}}
<!-- Page Content-->
<section class="py-5">
    <div class="container px-5">
        <h1 class="fw-bolder fs-5 mb-4">Blogue</h1>
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Astuces</div>
                            <div class="h2 fw-bolder">Comment réussir une prise de voix en studio ?</div>
                            <p>L’enregistrement vocal est une étape clé dans la production musicale. Une bonne prise de voix peut faire toute la différence entre un morceau amateur et une production professionnelle. Mais pour obtenir un son clair et expressif, plusieurs facteurs entrent en jeu &nbsp;: le choix du micro, l’acoustique [...]</p>
                            <a class="stretched-link text-decoration-none" href="#!">
                                Lire plus
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="bg-featured-blog" style="background-image: url('assets/blog-enregistrement-voix.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-xl-8">
                <h2 class="fw-bolder fs-5 mb-4">News</h2>
                <!-- News item-->
                <div class="mb-4">
                    <div class="small text-muted">May 12, 2023</div>
                    <a class="link-dark" href="#!">
                        <h3>Analogique vs numérique : quel est le meilleur choix pour votre production ?</h3>
                    </a>
                </div>
                <!-- News item-->
                <div class="mb-5">
                    <div class="small text-muted">May 5, 2023</div>
                    <a class="link-dark" href="#!">
                        <h3>Composer une mélodie accrocheuse : techniques et inspirations</h3>
                    </a>
                </div>
                <!-- News item-->
                <div class="mb-5">
                    <div class="small text-muted">Apr 21, 2023</div>
                    <a class="link-dark" href="#!">
                        <h3>Les erreurs à éviter en mixage : comment améliorer votre son</h3>
                    </a>
                </div>
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="#!">
                        Plus d'articles
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder">Contact</div>
                                <p class="text-muted mb-4">
                                    Pour des dossiers de presse, écrivez-nous à
                                    <br />
                                    <a href="#!">press@domain.com</a>
                                </p>
                                <div class="h6 fw-bolder">Follow us</div>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5">
        <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="assets/blog-studio.jpg" alt="Studio mixing" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Astuces</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Les secrets d’un bon mixage&nbsp;: équilibre et clarté</h5>
                        </a>
                        <p class="card-text mb-0">Un bon mixage ne se résume pas seulement à ajuster les volumes. Il s’agit de donner à chaque élément sa place dans
                            l’espace sonore. L’égalisation permet d’éliminer les fréquences inutiles, tandis que la compression contrôle la
                            dynamique [...]</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="assets/author-01.jpg" alt="..." width="60" />
                                <div class="small">
                                    <div class="fw-bold">Marcus Rowan</div>
                                    <div class="text-muted">12 Février, 2025 &middot; Lecture de 5 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="assets/blog-studio-accoustic.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Astuces</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">L’importance de l’acoustique en studio&nbsp;: capter le meilleur son</h5>
                        </a>
                        <p class="card-text mb-0">Même avec le meilleur micro, un mauvais traitement acoustique peut ruiner une prise de son. Un studio bien conçu réduit
                            les résonances indésirables et offre un enregistrement propre et naturel. Panneaux absorbants, bass traps et
                            positionnement des enceintes [...]</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="assets/author-02.jpg" alt="..." width="60" />
                                <div class="small">
                                    <div class="fw-bold">Josiah Barclay</div>
                                    <div class="text-muted">23 octobre, 2024 &middot; Lecture de 6 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="assets/blog-beatmaking.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Tutoriel</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Créer une instrumentale percutante&nbsp;: l’art du beatmaking</h5>
                        </a>
                        <p class="card-text mb-0">Tout commence par un bon groove ! Une rythmique accrocheuse et une basse bien dosée sont les fondations d’un beat
                            efficace. L’harmonie et les mélodies doivent ensuite s’intégrer naturellement pour donner une identité unique à
                            l’instrumentale.[...]</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="assets/author-03.jpg" alt="..." width="60" />
                                <div class="small">
                                    <div class="fw-bold">Evelyn Martinez</div>
                                    <div class="text-muted">2 juin, 2024 &middot; Lecture de 10 min</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-5 mb-xl-0">
                <a class="text-decoration-none" href="#!">
                    Plus d'articles
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
</section>
</main>
@endsection {{-- Ceci est la fin de section content --}}