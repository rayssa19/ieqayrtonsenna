@extends('layouts.site')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="section-home">
            <div class="container">
                <form class="form-register">
                    <div class="form-group">
                        <label for="name">Célula:</label>
                        <input type="name" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="name" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="name">Timóteo:</label>
                        <input type="name" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="name">Anfitriã(o):</label>
                        <input type="name" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="name">Secretário(a):</label>
                        <input type="name" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn mb-2">ENVIAR</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
