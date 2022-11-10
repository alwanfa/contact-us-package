<?php
namespace Wandev\Contact; 
use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 
            'contact'
        );
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php')
        ]);
        $this->publishes([
            __DIR__.'/public/contact.css' => public_path('vendor/contact/contact.css'),
        ], 'public');

        $this->publishes([
            __DIR__.'/views/contact' => resource_path('views/contact/contact'),
        ], 'public');

        $this->publishes([
            __DIR__.'/views/contact.blade.php' => resource_path('views/contact/contactView.blade.php'),
        ], 'public');

        $this->publishes([
            __DIR__.'/database/migrations/2022_10_27_094034_create_contacts_table.php' => app_path('/database/migrations/2022_10_27_094034_create_contacts_table.php'),
        ], 'public');
        $this->publishes([
            __DIR__.'/Models/contact.php' => app_path('/Models/Contact.php'),
        ], 'public');
        $this->publishes([
            __DIR__.'/Http/Controllers/ContactController.php' => app_path('/Http/Controllers/ContactController.php'),
        ], 'public');
        $this->publishes([
            __DIR__.'/Mail' => app_path('/Mail'),
        ], 'public');        
    }
    public function register()
    {

    }
}
?>