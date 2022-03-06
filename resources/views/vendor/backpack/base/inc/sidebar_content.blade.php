<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Coordenação de Turno</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('autorizacaodesaida') }}'><i class='nav-icon la la-question'></i>Autoricação de Saída</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('alunos') }}'><i class='nav-icon la la-question'></i> Alunos</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('autorizados') }}'><i class='nav-icon la la-question'></i> Autorizados</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('turma') }}'><i class='nav-icon la la-question'></i> Turmas</a></li>

    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>SOE</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('atendimento') }}'><i class='nav-icon la la-question'></i> Atendimentos</a></li>
    </ul>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Administrador</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Funcionário</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Cargos</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissões</span></a></li>
    </ul>
</li>

