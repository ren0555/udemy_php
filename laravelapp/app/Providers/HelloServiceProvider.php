<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(
            'hello.index','App\Http\Composers\HelloComposer'
        );
        
    }
        
    /**{
        View::composer(
            'hello.index',function($view){
                $view->with('view_message','composer message!'); 
            } //helloのindexビュー（「views」内の「hello」フォルダ内にある「index.blade.php」テンプレートによるビュー）に「view_message」という値を設定する処理を作成します
        );
        //$view->with(変数名,値);
     }*/
}
