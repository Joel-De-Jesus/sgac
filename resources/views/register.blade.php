@extends('layouts.app')

@section('title', $title)

@section('content')

    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="myform form ">
                <div class="logo mb-3">
                    <div class="col-md-12 text-center">
                        <h1>Cadastro</h1>
                    </div>
                </div>
                <form name="form" data-action="{{ route('auth.client.register') }}" autocomplete="on">
                    @csrf
                    <div class="message_box d-none" role="alert"></div>
                    <input hidden name="usertype" value="client">
                    <div class="form-label">
                        <label for="name">Nome Completo</label>
                        <input type="text" name="name" class="form-control" id="name"
                               aria-describedby="nameHelp" placeholder="Escrever nome completo">
                    </div>
                    <div class="form-label">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email"
                               aria-describedby="emailHelp" placeholder="Escrever email">
                    </div>
                    <div class="form-label">
                        <label for="phone">Telefone</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                               aria-describedby="phoneHelp" placeholder="Escrever número de telefone">
                    </div>
                    <div class="form-label">
                        <label for="password">Senha</label>
                        <input type="password" name="password" class="form-control" id="password"
                               aria-describedby="passwordHelp"
                               placeholder="Escrever senha">
                    </div>
                    <div class="form-label">
                        <label for="password_conf">Confirm a Senha</label>
                        <input type="password" name="password_conf" id="password_conf" class="form-control"
                               aria-describedby="password_confHelp" placeholder="Confirmar a senha">
                    </div>
                    <div class="col-md-12 text-center mb-3">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Cadastrar-se
                        </button>
                    </div>
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <p class="text-center"><a href="{{ route('app.login') }}">Já tem uma conta?</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('sgac/css/styles.css') }}">
@endpush
