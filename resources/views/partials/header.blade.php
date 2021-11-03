<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="{{ route('home-page') }}">Comics</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home-page') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">Comics List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.create')}}">Enter a new Comic</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
    </div>
</div>