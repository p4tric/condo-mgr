<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">Condominium Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Visit Form</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/visitorlogs') }}">Visitor Logs</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/units') }}">Units</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/visitors') }}">Visitors</a>
      </li>

    </ul>
  </div>
</nav>
