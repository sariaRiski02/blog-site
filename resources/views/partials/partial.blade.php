<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">R Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Blog")? 'active' : '' }}" href="/Blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>