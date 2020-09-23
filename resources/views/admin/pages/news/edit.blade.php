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
            <h1>Editar notícia</h1>
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
            <form role="form-noticias" action="{{ route('news-update',$news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="notTitulo">Título</label>
                        <input type="text" class="form-control" id="notTitulo" name="notTitulo" placeholder="Digite o título" value="{{ $news->title }}">
                    </div>
                    <div class="form-group">
                        <label for="notAutor">Autor</label>
                        <input type="text" class="form-control" id="notAutor" name="notAutor" placeholder="Digite o nome do autor" value="{{ $news->author }}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Caminho</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Digite o caminho que essa noticia terá" value="{{ $news->slug }}">
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione as tags" style="width: 100%;" tabindex="-1" name="tags[]">
                        @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}"
                            @foreach ($news->tags as $newsTag)
                                @if ($newsTag->id == $tag->id)
                                    selected
                                @endif
                            @endforeach
                            >{{ $tag->name }}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group" style="margin-top:18px;">
                        <label>Categorias</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione as categorias" style="width: 100%;" tabindex="-1" name="categories[]">
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @foreach ($news->categories as $newsCategory)
                                    @if ($newsCategory->id == $category->id)
                                        selected
                                    @endif
                                @endforeach
                            >{{ $category->name }}</option>
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
                        <input type="text" class="form-control" id="notImgLegenda" name="notImgLegenda" placeholder="Adicione uma legenda para deficientes visuais poderem entender sua imagem" value="{{ $news->image_caption }}">
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
                            <textarea class="textarea" placeholder="Digite o texto da notícia" id='notTexto' name='notTexto'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $news->text }}</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="notPublicacao" name="notPublicacao" value="1" @if ($news->publish == 1)
                        {{'checked'}}
                      @endif>
                        <label class="form-check-label" for="notPublicacao">Deseja publicar?</label>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar notícia</button>
                <a href="{{ route('news')}}" class="btn btn-primary">Voltar</a>
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
