@extends('admin/app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entrevistas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Entrevistas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th width="280px"></th>
        </tr>
        @foreach ($interviews as $entrevista)
        <tr>
            <td>{{ $entrevista->title }}</td>
            <td>
                <form action="{{ route('interviews-destroy',$entrevista->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('interviews-edit',$entrevista->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('interviews-create') }}"> Cadastrar nova entrevista</a>
    </div>
    </section>
</div>
@endsection
