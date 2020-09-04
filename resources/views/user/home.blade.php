 @extends('user/app')

 @section('main-content')
  <!-- Main Content -->
  <div class="container">
    @extends('user/components/carousel')
    <div class="row mb-5">
        <div class="col">
            <div class="row">
                <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
            </div>
            <div class="row">
                Ultima Critica
            </div>
        </div>
        <div class="col">
            <div class="col">
                <div class="row">
                    <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                </div>
                <div class="row">
                    Entrevista
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col">
                <div class="row">
                    <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                </div>
                <div class="row">
                    Podcast
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-9">
            <h3 style="text-align: center">Últimas Notícias</h3>
            <div class="row mb-5">
                <div class="col-6">
                    <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                </div>
                <div class="col" style="vertical-align: middle">
                    <h2>lorem</h2>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-6">
                    <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                </div>
                <div class="col">
                    <h2>lorem</h2>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-6">
                    <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                </div>
                <div class="col">
                    <h2>lorem</h2>
                </div>

            </div>
        </div>
        <div class="col">
            <iframe src="https://open.spotify.com/embed/playlist/0Ntxi04q5LMVpWV5Ljo1Dh" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>

    </div>
  </div>

  <hr>
 @endsection
