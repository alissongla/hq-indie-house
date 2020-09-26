@extends('admin/app')

@section('head')
<!-- Select2 -->
<link rel="stylesheet" href={{ asset('admin/plugins/select2/css/select2.min.css') }}>
<link rel="stylesheet" href={{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
@endsection
@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro de críticas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Cadastro</li>
              <li class="breadcrumb-item active">Críticas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <form role="form-criticas" action="{{ route('reviews-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="criTitulo">Título</label>
                        <input type="text" class="form-control" id="criTitulo" name="criTitulo" placeholder="Digite o título">
                    </div>
                    <div class="form-group">
                        <label for="criSubTitulo">Sub-título</label>
                        <textarea class="textarea" placeholder="Digite o sub-título da crítica" id='criSubTitulo' name='criSubTitulo'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="criAutor">Autor</label>
                        <input type="text" class="form-control" id="criAutor" name="criAutor" placeholder="Digite o nome do autor">
                    </div>
                    <div class="form-group">
                        <label for="slug">Caminho</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Digite o caminho que essa crítica terá">
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione as tags" style="width: 100%;" tabindex="-1" name="tags[]">
                        @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group" style="margin-top:18px;">
                        <label>Categorias</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione as categorias" style="width: 100%;" tabindex="-1" name="categories[]">
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="criImagem">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="criImagem" name="criImagem">
                                <label class="custom-file-label" for="criImagem">Selecione um imagem para adicionar a crítica</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Enviar</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="criImgLegenda">Legenda da imagem</label>
                        <input type="text" class="form-control" id="criImgLegenda" name="criImgLegenda" placeholder="Adicione uma legenda para deficientes visuais poderem entender sua imagem">
                    </div>
                    <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Texto
                          </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                            <textarea class="textarea editorTexto" placeholder="Digite o texto da crítica" id='criTexto' name='criTexto'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="criNota">Nota da crítica</label>
                        <input id="criNota" type="text" name="criNota" value="">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="criPublicacao" name="criPublicacao" value="1">
                        <label class="form-check-label" for="criPublicacao">Deseja publicar?</label>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar crítica</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
