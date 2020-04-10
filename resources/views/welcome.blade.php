@extends('layouts.site')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="section-home">
            <div class="d-flex justify-content-center align-items-center background">
                <div class="row-text">
                    <h1 class="text-center p-4">Igreja do Evangelho Quadrangular</h1>
                    <span></span>
                    <p class="text-center p-4">68 anos no Brasil</p>
                </div>
            </div>
        </div>
        <div class="section-symbols mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 symbols red">
                        <img class="img-symbols" src="../images/jesus-salva.png" alt="">
                        <p class="text-center font-weight-bold mt-3">Jesus Salva</p>
                    </div>

                    <div class="col-lg-3 col-md-6 symbols yellow">
                        <img class="img-symbols" src="../images/jesus-batiza.png" alt="">
                        <p class="text-center font-weight-bold mt-3">Jesus batiza</p>
                    </div>

                    <div class="col-lg-3 col-md-6 symbols blue">
                        <img class="img-symbols" src="../images/jesus-cura.png" alt="">
                        <p class="text-center font-weight-bold mt-3">Jesus cura</p>
                    </div>

                    <div class="col-lg-3 col-md-6 symbols purple">
                        <img class="img-symbols" src="../images/jesus-voltara.png" alt="">
                        <p class="text-center font-weight-bold mt-3">Jesus voltará</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
