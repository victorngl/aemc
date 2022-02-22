@extends(backpack_view('blank'))

@section('content')
    <div class="card">
        <div class="card-header"><h5>Autorizados a retirar o aluno: </h5> {{ $aluno->nome}}<br><small>Turma: {{ $aluno->turma->name }}</small></div>
        <div class="card-body">
            <div id="accordion" role="tablist">
                @php $count = 0 @endphp
                @foreach($aluno->autorizados as $autorizado)
                    @php $count++ @endphp
                <div class="card mb-0">
                    <div class="card-header" id="heading{{$count}}" role="tab">
                        <h5 class="mb-0"><a data-toggle="collapse" href="#collapse{{$count}}" aria-expanded="false" aria-controls="collapse{{$count}}" class="collapsed">{{$autorizado->nome}}</a></h5>
                    </div>
                    <div class="collapse" id="collapse{{$count}}" role="tabpanel" aria-labelledby="heading{{$count}}" data-parent="#accordion" style="">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>CPF</th>
                                <th>Parentesco</th>
                                <th>Telefone</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$autorizado->cpf}}</td>
                                <td>{{$autorizado->parentesco}}</td>
                                <td>{{$autorizado->telefone}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
