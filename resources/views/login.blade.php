@extends('layouts.app')

@section('title', $title)

@section('content')

    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="myform form ">
                <div class="logo mb-3">
                    <div class="col-md-12 text-center">
                        <h1>Login</h1>
                    </div>
                </div>
                <form name="form" data-action="{{ route('auth.login') }}">
                    @csrf
                    <div class="message_box d-none" role="alert"></div>
                    <div class="form-label">
                        <label for="email">Endereço de email</label>
                        <input type="text" name="email" class="form-control" id="email"
                               aria-describedby="emailHelp"
                               placeholder="Digite o e-mail">
                    </div>
                    <div class="form-label">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control"
                               aria-describedby="emailHelp" placeholder="Digite a senha">
                    </div>
                    <div class="form-label">
                        <p class="text-center">Ao se inscrever você aceita nossos <a href="#">Termos de Uso</a></p>
                    </div>
                    <div class="col-md-12 text-center ">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Entrar</button>
                    </div>
                    <div class="form-label">
                        <p class="text-center">Não tem conta? <a href="{{ route('app.register') }}">Cadastre-se
                                aqui</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('sgac/css/styles.css') }}">
@endpush
