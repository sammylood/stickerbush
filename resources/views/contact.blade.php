@extends('master') {{-- Le contenu de master.blade.php est appelé  --}}
@section('title', 'Contact') {{-- Le titre de cette page est créé --}}
@section('content') {{-- Le contenu du content est inclus dans la section à cette effet sur le master --}}
<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Restons en contact</h1>
                <p class="lead fw-normal text-muted mb-0">Nous aimerions avoir de vos nouvelles</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    {{-- Ce contenu est appelé sur la page, quand le formulaire est envoyé par le post et récupéré par la variable $data --}}
                    @isset($data)
                    <p><strong>Name: </strong>{{ $data->name ?? '' }}</p>
                    <p><strong>Email: </strong>{{ $data->email ?? '' }}</p>
                    <p><strong>Phone: </strong>{{ $data->phone ?? '' }}</p>
                    <p><strong>Message: </strong>{{ $data->message ?? '' }}</p>
                    @else
                    <form method="POST">
                        {{-- Ceci permet au formulaire d'être envoyé --}}
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nom complet</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Vous devez fournir votre nom.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Courriel</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un courriel est requis.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Le courriel n'est pas valide.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Numéro de téléphone</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea name="message" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Le formulaire a été envoyé avec succès!</div>
                                Pour activer le formulaire connectez-vous à
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Une erreur est survenue lors de l'envoie du message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Soumettre</button></div>
                    </form>
                    @endisset
                </div>
            </div>
        </div>
        <!-- Contact cards-->
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                <div class="h5 mb-2">Clavardez avec nous</div>
                <p class="text-muted mb-0">Clavardez en direct avec nos spécialistes.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                <div class="h5">Demandez à la communauté</div>
                <p class="text-muted mb-0">Explorer le forum de la communauté et communiquez avec d'autres utilisateurs</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                <div class="h5">Centre de support</div>
                <p class="text-muted mb-0">Parcourez la FAQ et les articles de supports pour trouver des solutions</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Appelez-nous</div>
                <p class="text-muted mb-0">Appelez-nous durant les heures normales d'ouverture au (555) 892-9403.</p>
            </div>
        </div>
    </div>
</section>
</main>
@endsection {{-- Ceci est la fin de section content --}}

@section('contactForm') {{-- Ceci est la section contactForm , elle sera incluse dans le master.blade.php--}}
<!-- formulaire JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection {{-- Ceci est la fin de section contactForm --}}