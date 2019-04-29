@extends('layout')
@section('contenido')
<section class="container mt-5 mb-5">
    <h3> Recupera tu cuenta </h3>
    <section id="app" class="col-md-7 col-lg-5 m-auto">
        <span class="pb-3" style="font-size:12px;">Introduce tu correo electronico para poder recuperar tu cuenta</span>
        <section>
            <form action="{{ url('/acceder/buscar_email') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span style="font-size:12px;" class="input-group-text font-weight-bold" id="email">Email del usuario</span>
                    </div>
                    <input style="font-size:12px;" type="text" class="form-control" id="email" name="email" value="" aria-label="email" aria-describedby="email">  
                </div>
                <button type="submit" style="font-size:12px;" class="btn btn-primary btn-sm"> Buscar </button>
                <a style="font-size:12px;" href="{{ route('home') }}" role="button" class="btn btn-secondary btn-sm"> Cancelar </a>
            </form>
        </section>
    </section>
</section>
@stop