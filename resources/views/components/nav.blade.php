<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cars</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('cars.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cars.index')}}">Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cars.create')}}">Create new car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories.create')}}">Create new category</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>