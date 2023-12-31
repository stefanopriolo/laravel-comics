@php
    $menu = [
        ["title" => "Characters"],
        ["title" => "Comics"],
        ["title" => "Movies"],
        ["title" => "Tv"],
        ["title" => "Games"],
        ["title" => "Collectibles"],
        ["title" => "Videos"],
        ["title" => "Fans"],
        ["title" => "News"],
        ["title" => "Shop"],
];
@endphp

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="imgs/dc-logo.png" alt="logo" style="width: 80px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-around h-100" id="navbarNavAltMarkup">
            <div class="navbar-nav text-uppercase">
              @foreach ($menu as $nav)
              <a class="nav-link" href="#">
                {{ $nav["title"] }}
                <div class="after-div" tabindex="0"></div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </nav>
    
      <div class="jumbotron"></div>
</header>