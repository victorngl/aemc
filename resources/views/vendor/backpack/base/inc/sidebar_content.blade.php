<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('autorizacaodesaida') }}">
        <i class="la la-home nav-icon"></i>Autorização de Saída</a>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('alunos') }}'><i class='nav-icon la la-question'></i> Alunos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('autorizados') }}'><i class='nav-icon la la-question'></i> Autorizados</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('turma') }}'><i class='nav-icon la la-question'></i> Turmas</a></li>