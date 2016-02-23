@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <p>Edição de tarefas</p>
            </div>
            <div class="col-lg-6">
                <form class="form-horizontal" method="post" action="{{url('recursos' )}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Criar Tarefa</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nome">Nome da Tarefa</label>
                            <div class="col-md-5">
                                <input type="hidden" name="id" value="{{ $task->id }}"/>
                                <input id="nome" name="nome" type="text" placeholder="Digite no nome da tarefa" class="form-control input-md" required="" value="{{ $task->nome }}">
                                <span class="help-block">Entre com o nome da tarefa</span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;&nbsp;Gravar Tarefa</button>
                            </div>
                        </div>

                    </fieldset>
                </form>


            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
@endsection