<?php

namespace App\Http\Middleware;

use App\Task;
use Carbon\Carbon;
use Closure;
use Illuminate\Session;

class DouglasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Carbon::today()->format('Y-m-d') != '2016-02-22'){

            session()->flash('mensagem', '<BR />DOUGLAS MIDDLEWARE<hr />Voc� nao esta na data 2016-02-22');
            Task::create([
                'nome' => 'Tarefa gravada pelo Middleware Douglas em '.Carbon::now()->format('d/m/Y H:i:s')
            ]);

            return redirect('welcome');
        }
        /**
         * Isto � interessante para gravar hist�rico de a��es do sistema
         *
         */
        Task::create([
            'nome' => 'Tarefa gravada pelo Middleware Douglas em '.Carbon::now()->format('d/m/Y H:i:s')
        ]);
        return $next($request);
    }
}
