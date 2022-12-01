<?php
namespace Wandev\Contact; 
use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/public/contact.css' => public_path('vendor/contact/contact.css'),
            __DIR__.'/views' => resource_path('views/vendor/contact'),
            __DIR__.'/database/factories'=>database_path('/factories/wandev'),
            __DIR__.'/database/migrations/2022_10_27_094034_create_contacts_table.php' => database_path('/migrations/2022_10_27_094034_create_contacts_table.php'),
            __DIR__.'/Models/contact.php' => app_path('/Models/Contact.php'),
            __DIR__.'/Http/Controllers/ContactController.php' => app_path('/Http/Controllers/ContactController.php'),
            __DIR__.'/Mail' => app_path('/Mail')
        ],["laravel-assets"]); 
    }
    public function register()
    {
        
    }
}
?>