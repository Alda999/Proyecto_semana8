<div class="table table-success table-striped">
    <table class="table" id="pacientes-table">
        <thead>
            <tr>
                <th>Ape Nom</th>
        <th>Dni</th>
        <th>Celular</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->ape_nom }}</td>
            <td>{{ $paciente->dni }}</td>
            <td>{{ $paciente->celular }}</td>
                <td width="350">
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->idpaciente], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->idpaciente]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pacientes.edit', [$paciente->idpaciente]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
