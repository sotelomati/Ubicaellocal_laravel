@extends("layaouts.plantilla")


@section("head")
<title>Ubica el local</title>
@endsection


@section("body")

        <!-- Formulario -->
        <div class="container">

            <div class="row">

                
                <div class="col-12 col-lg-5 py-5">
                    <div class="single-head border rounded " style="border-radius:1.25rem !important; padding: 50px; height: 100%; background: #3763eb;">
                        <div class="contant-inner-title">
                            <h4 >Informacion de contacto</h4>
                            <p>Deja tu consulta o sugerencia, nosotro estaremos respondiendo a la brevedad.</p>
                        </div>
                        <div class="single-info">
                            <i class="bi bi-telephone"></i>
                            <ul>
                            <li>+54 0343 470-8569</li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="lni lni-envelope"></i>
                            <ul>
                            <li><a href="mailto:info@yourwebsite.com">ubicaellocal@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="lni lni-map"></i>
                            <ul>
                            <li>Ubica El Local Drugstore, O'Higgins 556.</li>
                            </ul>
                        </div>
                        <div class="contact-social">
                            <h5>Follow Us on</h5>
                            <ul>
                            <li>
                            <a href="#">
                            <span class="icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-start" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
                                </svg>
                                </span>
                            <span class="icon-2"><i class="lni lni-facebook-filled"></i></span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                            <span class="icon-1"><i class="lni lni-twitter-original"></i></span>
                            <span class="icon-2"><i class="lni lni-twitter-original"></i></span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                            <span class="icon-1"><i class="lni lni-linkedin-original"></i></span>
                            <span class="icon-2"><i class="lni lni-linkedin-original"></i></span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                            <span class="icon-1"><i class="lni lni-instagram"></i></span>
                            <span class="icon-2"><i class="lni lni-instagram"></i></span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                            <span class="icon-1"><i class="lni lni-behance-original"></i></span>
                            <span class="icon-2"><i class="lni lni-behance-original"></i></span>
                            </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 py-5">

                    <h1>Tienes alguna consulta? Dejala aqui debajo</h1>


                    <form action="contacto" method="POST">
                        @csrf
                        <!-- Token de seguridad -->

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                    <label for="form_name" >Nombre</label>
                                    <input name="Nombre" id="form_name" type="text" class="form-control" placeholder="Nombre" required>
                                    {!! $errors->first('Nombre', '<small>:message</small><br>') !!}
                            </div>

                            <div class="col-md-6  mb-3">
                                    <label for="form_lastname">Apellido</label>
                                    <input name="Apellido" id="form_lastname" type="text"  class="form-control" placeholder="Apellido" required="required">
                                    {!! $errors->first('Nombre', '<small>:message</small><br>') !!}
                                    <div class="invalid-feedback">
                                        Te faltó el apellido capo.
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                    <label for="form_email">Email</label>
                                    <input name="Mail" id="form_email" type="email" class="form-control" placeholder="Correo" required="required">
                                    <div class="invalid-feedback">
                                        Y el email pa?
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                    <label for="form_message">Mensaje</label>
                                    <textarea name="Cotenido" id="form_message" class="form-control" placeholder="Mensaje" rows="4" required="required"></textarea>
                                    <div class="invalid-feedback">
                                        Ah bueee
                                    </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Enviar mensaje">
                            </div>
                        </div>
                        
                    </form> 

                </div>
            </div>

        </div>

        <!-- GMap -->
        <div class="embed-responsive embed-responsive-16x9 mb-5" style="height: 400px; width:1100px; margin: 0 auto; display: block;">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.279306402406!2d-60.51703808484346!3d-31.762867181290016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b44db837bbb857%3A0x71bdd1b69d4b0c5c!2sBernardo%20O&#39;Higgins%20566%2C%20Paran%C3%A1%2C%20Entre%20R%C3%ADos!5e0!3m2!1ses-419!2sar!4v1610662093247!5m2!1ses-419!2sar"  allowfullscreen></iframe>
        </div>
        
@endsection

@section("pie")
        <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
        </script>
@endsection