<!--Navbar-->
{{-- @if (Request::is('create'))
    <h1>kuy</h1>
@endif --}}
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Laravel Learning</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('/')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('create') || Request::is('edit/*') ? 'active' : '' }}">
          <a class="nav-link" href="{{url('/create')}}">
            @if (Request::is('edit/*'))
                Edit
            @else
                Add new
            @endif
            </a>
        </li>

      </ul>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->
