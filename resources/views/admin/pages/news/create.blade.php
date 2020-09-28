@extends('admin/app')

@section('head')
<!-- Select2 -->
<link rel="stylesheet" href={{ secure_asset('admin/plugins/select2/css/select2.min.css') }}>
<link rel="stylesheet" href={{ secure_asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
@endsection
@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro de notícias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Cadastro</li>
              <li class="breadcrumb-item active">Notícias</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <form role="form-noticias" action="{{ route('news-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="notTitulo">Título</label>
                        <input type="text" class="form-control" id="notTitulo" name="notTitulo" placeholder="Digite o título">
                    </div>
                    <div class="form-group">
                        <label for="notSubTitulo">Sub-título</label>
                        <textarea class="textarea" placeholder="Digite o sub-título da notícia" id='notSubTitulo' name='notSubTitulo'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="notAutor">Autor</label>
                        <input type="text" class="form-control" id="notAutor" name="notAutor" placeholder="Digite o nome do autor">
                    </div>
                    <div class="form-group">
                        <label for="slug">Caminho</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Digite o caminho que essa noticia terá">
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
                        <label for="notImagem">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="notImagem" name="notImagem">
                                <label class="custom-file-label" for="notImagem">Selecione um imagem para adicionar a notícia</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Enviar</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="notImgLegenda">Legenda da imagem</label>
                        <input type="text" class="form-control" id="notImgLegenda" name="notImgLegenda" placeholder="Adicione uma legenda para deficientes visuais poderem entender sua imagem">
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
                            <textarea class="textarea editorTexto" placeholder="Digite o texto da notícia" id='notTexto' name='notTexto'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="notPublicacao" name="notPublicacao" value="1">
                        <label class="form-check-label" for="notPublicacao">Deseja publicar?</label>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar notícia</button>
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
