@extends("layaouts.plantilla")


@section("head")
<title>Ubica el local</title>
@endsection


@section("body")

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Tienes alguna consulta? Dejala aqui debajo</h1>


                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                    <label for="form_name" >Nombre</label>
                                    <input id="form_name" type="text" class="form-control" placeholder="Nombre" required>
                                    <div class="invalid-feedback">
                                        Ingrese su nombre
                                    </div>
                            </div>

                            <div class="col-md-6  mb-3">
                                    <label for="form_lastname">Apellido</label>
                                    <input id="form_lastname" type="text"  class="form-control" placeholder="Apellido" required="required">
                                    <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                    <label for="form_email">Email</label>
                                    <input id="form_email" type="email" class="form-control" placeholder="Correo" required="required">
                                    <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                    <label for="form_message">Mensaje</label>
                                    <textarea id="form_message" class="form-control" placeholder="Mensaje" rows="4" required="required"></textarea>
                                    <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Enviar mensaje">
                            </div>
                        </div>

                    </form> 

                </div>

            </div>

        </div>

        <script src="form-validation.js">
        
        </script>

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