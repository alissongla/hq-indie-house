@extends('admin/app')

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
            <form role="form-noticias">
                <div class="card-body">
                    <div class="form-group">
                        <label for="notTitulo">Título</label>
                        <input type="email" class="form-control" id="notTitulo" placeholder="Digite o título">
                    </div>
                    <div class="form-group">
                        <label for="notCaminho">Caminho</label>
                        <input type="password" class="form-control" id="notCaminho" placeholder="Digite o caminho que essa noticia terá">
                    </div>
                    <div class="form-group">
                        <label for="notImagem">Imagem</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="notImagem">
                                <label class="custom-file-label" for="notImagem">Selecione um imagem para adicionar a notícia</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Enviar</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="notImgLegenda">Legenda da imagem</label>
                        <input type="password" class="form-control" id="notImgLegenda" placeholder="Adicione uma legenda para deficientes visuais poderem entender sua imagem">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="notPublicacao">
                        <label class="form-check-label" for="notPublicacao">Deseja publicar?</label>
                    </div>
                </div>
                <!-- /.card-body -->
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
                        <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <p class="text-sm mb-0">
                        Editor <a href="https://github.com/summernote/summernote">Documentation and license
                        information.</a>
                      </p>
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
