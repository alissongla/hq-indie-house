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
            <h1>Editar Podcast</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Editar</li>
              <li class="breadcrumb-item active">Podcasts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <form role="form-podcasts" action="{{ route('podcasts-update',$podcast->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="podTitulo">Título</label>
                        <input type="text" class="form-control" id="podTitulo" name="podTitulo" placeholder="Digite o título" value="{{ $podcast->title }}">
                    </div>
                    <div class="form-group">
                        <label for="podSubTitulo">Sub-título</label>
                        <textarea class="textarea" placeholder="Digite o sub-título do podcast" id='podSubTitulo' name='podSubTitulo'
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $podcast->subtitle }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="podAutor">Autor</label>
                        <input type="text" class="form-control" id="podAutor" name="podAutor" placeholder="Digite o nome do autor" value="{{ $podcast->author }}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Caminho</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Digite o caminho que esse podcast terá" value="{{ $podcast->slug }}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Link streaming</label>
                        <input type="text" class="form-control" id="podLink" name="podLink" placeholder="Digite link compartilhado pela plataforma do podcast" value="{{ $podcast->embed_link }}">
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione as tags" style="width: 100%;" tabindex="-1" name="tags[]">
                        @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}"
                            @foreach ($podcast->tags as $podcastTag)
                                @if ($podcastTag->id == $tag->id)
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
                                @foreach ($podcast->categories as $podcastCategory)
                                    @if ($podcastCategory->id == $category->id)
                                        selected
                                    @endif
                                @endforeach
                            >{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="podImagem">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="podImagem" name="podImagem">
                                <label class="custom-file-label" for="podImagem">Selecione um imagem para capa do podcast</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Enviar</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="podImgLegenda">Legenda da imagem</label>
                        <input type="text" class="form-control" id="podImgLegenda" name="podImgLegenda" placeholder="Adicione uma legenda para deficientes visuais poderem entender sua imagem" value="{{ $podcast->image_caption }}">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="podPublicacao" name="podPublicacao" value="1" @if ($podcast->publish == 1)
                        {{'checked'}}
                      @endif>
                        <label class="form-check-label" for="podPublicacao">Deseja publicar?</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Editar podcast</button>
                    <a href="{{ route('podcasts')}}" class="btn btn-primary">Voltar</a>
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
