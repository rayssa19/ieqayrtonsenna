@extends('layouts.site')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="section-home">
        <div class="container">
            @if (session('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" 
                data-dismiss="alert"
                aria-label="close">&times;</a>
                {{ session('message') }}
            </div>
            @endif
            <form class="form-register" method="post"  action="{{route('cell.store')}}" 
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Célula:</label>
                <input type="name" class="form-control" name="nome" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Líder:</label>
                <input type="name" class="form-control" name="leader" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Timóteo:</label>
                <input type="name" class="form-control" name="viceleader" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Oferta:</label>
                <input type="name" class="form-control" name="offers" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Data:</label>
                <input type="name" class="form-control" name="date" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Início:</label>
                <input type="name" class="form-control" name="start" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Término:</label>
                <input type="name" class="form-control" name="finish" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Membros:</label>
                <input type="name" class="form-control" name="members" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Visitates:</label>
                <input type="name" class="form-control" name="visitors" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Total:</label>
                <input type="name" class="form-control" name="total" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Decisões:</label>
                <input type="name" class="form-control" name="decisions" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Testemunhos:</label>
                <input type="name" class="form-control" name="testimonials" placeholder="">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn mb-2" id="black">Cadastrar</button>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
