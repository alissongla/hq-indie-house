@extends('admin/app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro de categorias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Categorias</li>
              <li class="breadcrumb-item active">Cadastro</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <form role="form-categories" action="{{ route('categories-store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="categoriesName">Nome</label>
                        <input type="text" class="form-control" id="categoriesName" name="categoriesName" placeholder="Digite o título">
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar Categoria</button>
                  <a class="btn btn-primary" href="{{ route('categories') }}"> Voltar</a>
                </div>
            </form>
        </div>
      </div>
    </section>
</div>
@endsection
