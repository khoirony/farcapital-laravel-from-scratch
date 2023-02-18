<?php

namespace App\Providers;

use App\Services\ConvertKitNewsletter;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;
use App\Models\User;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // dd('asu');
        app()->bind(Newsletter::class, function() {
            $client = (new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us18'
            ]);

            return new MailchimpNewsletter($client);
            // return new ConvertKitNewsletter();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        Gate::define('admin', function(User $user){
            return auth()->user()?->username == 'rony';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
