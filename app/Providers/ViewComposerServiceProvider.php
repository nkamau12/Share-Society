<?php

namespace App\Providers;

use App\client;
use App\member;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.navbar',function($view){
            $clients = member::all();
            $activem = array();
            $i=0;
            foreach($clients as $client){
                $activem[] = array(
                    "id" => $client->MID,
                    "name"=> $client->Fname." ".$client->Lname,
                );
                $i++;
            }
           $view->with('activem',$i)->with('members',$activem);
        });
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
