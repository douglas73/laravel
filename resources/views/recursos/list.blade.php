@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-2">
            <p>Listagem de tarefas</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="label label-default label-pill pull-xs-right badge">{{ count($tasks) }}</span>
                    Tarefas criadas
                </li>
                <li class="list-group-item">
                    <span class="label label-default label-pill pull-xs-right">1</span>
                    <a href="{{ url('recursos/create') }}">Criar Nova Tarefa</a>
                </li>

            </ul>
        </div>
        <div class="col-lg-6">
            <ul class="list-group">
            @foreach($tasks as $task)
                    <li class="list-group-item"><a href="{{url('recursos/'.$task->id.'\edit')}}">{{ $task->nome }}</a></li>
            @endforeach
            </ul>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection