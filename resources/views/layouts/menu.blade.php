<li class="btn btn-primary" >
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>


<li class="btn btn-primary" >
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
       <div class="alert alert-primary" role="alert">
          <p>Pacientes</p>
    </a>
</li>


<li class="btn btn-primary" >
    <a href="{{ route('citas.index') }}"
       class="nav-link {{ Request::is('citas*') ? 'active' : '' }}">
        <p>Citas</p>
    </a>
</li>


<li class="btn btn-primary" >
    <a href="{{ route('citasDetalles.index') }}"
       class="nav-link {{ Request::is('citasDetalles*') ? 'active' : '' }}">
        <p>Citas Detalles</p>
    </a>
</li>


<li class="btn btn-primary" >
    <a href="{{ route('doctors.index') }}"
       class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <p>Doctors</p>
    </a>
</li>


