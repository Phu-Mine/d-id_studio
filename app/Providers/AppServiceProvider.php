<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (App::environment(config('constants.APP_ENV.prod'))) {
            URL::forceScheme('https');
        }

        // Set default string length in migration
        // 191 * 4 = 764 bytes. DB support maximum 767 bytes
        Schema::defaultStringLength(191);

        // Set variables that are used in all pages
        view()->composer('*', function ($view) {
            $appIconKey = config('constants.CONFIG_KEY.SITE_FAVICON');
            $appIcon = null;
            if (Session::has($appIconKey)) {
                $appIcon = Session::get($appIconKey);
            } else {
                $appIcon = 'assets/images/logo/favicon.png';
                Session::put($appIconKey, $appIcon);
            }
            
            $userInfo = [];
            $appMenu = [];
            if (Auth::check()) {
                //Check is login
            }

            $headerMenu = [
                'item0' => [
                    'key' => 'home',
                    'label' => 'Home',
                    'url' => '/home',
                ],
                'item1' => [
                    'key' => 'products',
                    'label' => 'Products',
                    'url' => '/product',
                    'children' => [
                        'item1' => [
                            'key' => 'api',
                            'label' => 'API',
                            'url' => '/product/api',
                        ],
                        'item2' => [
                            'key' => 'studio',
                            'label' => 'AI Video (Studio)',
                            'url' => '/product/studio',
                        ],
                        'item1' => [
                            'key' => 'addin',
                            'label' => 'AddIn/Plugin PPTX',
                            'url' => '/product/addin',
                        ],
                    ]
                ],
                'item2' => [
                    'key' => 'price',
                    'label' => 'Pricing',
                    'url' => '/pricing',
                    'children' => [
                        'item1' => [
                            'key' => 'api',
                            'label' => 'API',
                            'url' => '/pricing/api',
                        ],
                        'item2' => [
                            'key' => 'studio/addin',
                            'label' => 'Studio/AddIn',
                            'url' => '/pricing/studio-addin',
                        ]
                    ]
                ],
                'item3' => [
                    'key' => 'contact',
                    'label' => 'Contact Us',
                    'url' => '/contact',
                ]
            ];

            $view->with('appIcon', $appIcon)
                ->with('appMenu', $appMenu)
                ->with('userInfo', $userInfo)
                ->with('_headerMenu', $headerMenu);
        });
    }
}
