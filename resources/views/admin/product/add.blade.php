@extends('layouts.app_admin')

@section('title', $title)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $data->belongs_to }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ $data->page_name }}</a></li>
                            <li class="breadcrumb-item active">{{ $data->belongs_to }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Formulário para registo de novos {{ strtolower($data->belongs_to) }}
                            s</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form autocomplete="off">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Nome do funcionário">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Preço</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                               placeholder="Preço do produto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="amount">Quantidade</label>
                                        <input type="text" class="form-control" id="amount" name="amount"
                                               placeholder="Quantidade do produto">
                                    </div>
                                    <div class="form-group">
                                        <label for="validation_date">Data de validade</label>
                                        <input type="date" class="form-control" id="validation_date"
                                               name="validation_date"
                                               placeholder="Data de validação">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            if (month < 10) month = "0" + month;
            if (day < 10) day = "0" + day;
            var today = year + "-" + month + "-" + day;
            $("#validation_date").attr("value", today);
        });
    </script>
@endpush
