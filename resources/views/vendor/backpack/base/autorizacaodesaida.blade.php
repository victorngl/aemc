@extends(backpack_view('blank'))


@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i>Autorização de retirada de aluno</div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="turmas-tab" data-toggle="tab" href="#turmas" role="tab" aria-controls="turmas" aria-selected="true">Turmas</a></li>
                        <li class="nav-item"><a class="nav-link" id="enviar-tab" data-toggle="tab" href="#enviar" role="tab" aria-controls="enviar" aria-selected="false">Enviar Arquivo</a></li>
                    </ul>
                        <div class="tab-content" id="myTab1Content">
                            <div class="tab-pane fade show active" id="turmas" role="tabpanel" aria-labelledby="turmas-tab">
                                <div class="row">
                                    <div class="col">
                                        <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Início</a></li>
                                            @foreach($turmas as $turma)
                                                @php $turma = strstr($turma->name, '/2022', true) @endphp
                                                <li class="nav-item"><a class="nav-link" id="{{$turma}}" data-toggle="pill" href="#a{{$turma}}" role="tab" aria-controls="{{$turma}}" aria-selected="false">{{$turma}}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            @foreach($turmas as $turma)
                                                @php $turmanome = strstr($turma->name, '/2022', true) @endphp
                                                <div class="tab-pane fade" id="a{{$turmanome}}" role="tabpanel" aria-labelledby="{{$turmanome}}">
                                                   @foreach($alunos as $aluno)
                                                       @if($aluno->id_turma == $turma->id)
                                                            <a href="/admin/autorizados/{{$aluno->naluno}}">{{$aluno->nome}}</a>
                                                           <hr>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                Selecione uma turma
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="enviar" role="tabpanel" aria-labelledby="enviar-tab">
                                <div class="card-header"><strong>Enviar arquivo da enquete</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="enquetefile">Selecionar arquivo:</label>
                                            <div class="col-md-9">
                                                <input id="file-input" type="file" name="enquetefile">
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i>Enviar</button>
                                        </div>
                                </div>
                                         </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
