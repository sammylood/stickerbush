@extends ('master') {{-- Le contenu de master.blade.php est appelé  --}}
@section('title', 'Home - Stickerbush studio Homepage') {{-- Le titre de cette page est créé --}}
@section('content') {{-- Le contenu du content est inclus dans la section à cette effet sur le master --}}
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Transformez vos idées en hits</h1>
                    <p class="lead fw-normal text-white-50 mb-4">"Votre son, notre passion." <br>Nous concrétisons vos projets pour des résultats fidèles à vos attentes</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Réserver une session</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://images.pexels.com/photos/164938/pexels-photo-164938.jpeg?auto=compress&cs=tinysrgb&w=600" alt="..." /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Élevez votre carrière musicale à son plein potentiel.</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-mic"></i></div>
                        <h2 class="h5">Enregistrement</h2>
                        <p class="mb-0">Capturez votre voix ou vos instruments avec une qualité studio professionnelle, grâce à notre matériel haut de gamme et
                            à l’acoustique optimisée.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-sliders"></i></div>
                        <h2 class="h5">Mixage & Mastering</h2>
                        <p class="mb-0">Sublimez votre musique avec un mixage équilibré et un mastering puissant pour une diffusion optimale sur toutes les
                            plateformes.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-speaker"></i></div>
                        <h2 class="h5">Production musicale</h2>
                        <p class="mb-0">Donnez vie à vos idées avec nos beatmakers et compositeurs qui créeront des instrumentales sur mesure adaptées à votre
                            univers.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-file-earmark-music"></i></div>
                        <h2 class="h5">Sound design</h2>
                        <p class="mb-0">Créez des ambiances sonores uniques pour vos musiques, films, jeux vidéo ou publicités grâce à des textures sonores
                            innovantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Travailler avec ce studio a été une expérience incroyable. L’équipe a tout de suite compris ma vision et a su la
                        transformer en un son professionnel et percutant. Le mix et le mastering sont d’une qualité exceptionnelle ! Je
                        recommande à 100 %."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="assets/citation-artist-8044064.jpg" alt="Pop artist" />
                        <div class="fw-bold">
                            Sonia Gloria
                            <span class="fw-bold text-primary mx-1">/</span>
                            Chanteuse, Compositrice, Side-B
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Nos derniers articles de blogue</h2>
                    <p class="lead fw-normal text-muted mb-5">Plongez dans l’univers de la production musicale avec des conseils d’experts, des astuces techniques et des analyses des
                        dernières tendances</p>
                </div>
            </div>
        </div>
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
        </div>
        <!-- Call to action-->
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Soyez à l'affut de nos nouveautés.</div>
                    <div class="text-white-50">Inscrivez à notre infolettre pour être à l'affut des nouvelles de Stickerbush.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Adresse courriel..." aria-label="Adresse courriel..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">S'incrire</button>
                    </div>
                    <div class="small text-white-50">Nous nous soucions de la confidentialité et ne partagerons jamais vos données.</div>
                </div>
            </div>
        </aside>
    </div>
</section>
</main>

@endsection    {{-- Ceci est la fin de section content --}}