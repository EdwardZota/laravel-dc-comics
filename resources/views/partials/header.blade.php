<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="text-white navbar-brand" href="{{route('home')}}">Dc Comics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white " aria-current="page" href="{{route('comics.index')}}">Lista fumetti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white " aria-current="page" href="{{route('trash_comics')}}">Cestino</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
