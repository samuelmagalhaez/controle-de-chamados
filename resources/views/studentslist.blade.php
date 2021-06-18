
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Links Indisponíveis no Monitoramento</h5>
        <p class="card-text">Listagem dos chamados em aberto.</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Número da Loja</th>
                <th scope="col">Designação</th>
                <th scope="col">Operadora</th>
                <th scope="col">Protocolo</th>
                <th scope="col">SLA</th>
                <th scope="col">Alteração</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-dark">Editar</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






