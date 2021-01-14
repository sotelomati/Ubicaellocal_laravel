@extends("layaouts.plantilla")


@section("head")
<title>Ubica el local</title>
@endsection


@section("body")

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Tienes alguna consulta? Dejala aqui debajo</h1>


                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="form_name">Nombre</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Nombre" required="required" data-error="Es necesario que ingrese su nombre">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6  mb-3">
                                <div class="form-group">
                                    <label for="form_lastname">Apellido</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Apellido" required="required" data-error="Es necesario que ingrese su apellido">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="form_email">Email</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Correo" required="required" data-error="Es necesario que ingrese su correo">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="form_message">Mensaje</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje" rows="4" required="required" data-error="Es necesario que ingrese un mensaje"></textarea>
                                    <div class="help-block with-errors"></div>
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
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>

@endsection