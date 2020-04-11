@extends('layouts.site')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="section-register">
        <div class="container">
            @if (session('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close"
                data-dismiss="alert"
                aria-label="close">&times;</a>
                {{ session('message') }}
            </div>
            @endif
            <form class="form-register" name="form-register" method="post"  action="{{route('leader.store')}}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Célula:</label>
                <input type="name" class="form-control" name="cell" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Líder:</label>
                <input type="name" class="form-control" name="name" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Timóteo:</label>
                <input type="name" class="form-control" name="viceleader" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Anfitriã(o):</label>
                <input type="name" class="form-control" name="host" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Secretário(a):</label>
                <input type="name" class="form-control" name="secretary" placeholder="">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn mb-2" id="black">Cadastrar</button>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
