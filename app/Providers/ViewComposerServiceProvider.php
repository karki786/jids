<?php

namespace App\Providers;

use App\Gallery;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
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
        view()->composer('Admin.includes.sidebar_menu', function ($view) {

            $modules = config('cmsconfig.modules');
            $modulePages = config('cmsconfig.modulepages');
            $modulePermissions = config('cmsconfig.modulepermissions');
            $moduleIcons = config('cmsconfig.moduleicons');
            $userPermission = Auth::guard("web")->user()->permission;
            $allData = [];
            $home = array('home' => ['home.home.index' => "Home"]);
            $modulePermissions = array_merge($home, $modulePermissions);


            if (Auth::guard("web")->user()->isSuperUser()) {
                //Checking if superuser or not
                foreach ($modules as $moduleID => $moduleTitle) {
                    if (!array_key_exists($moduleID, $modulePermissions))
                        continue;
                    $arrayData['id'] = $moduleID;
                    $arrayData['title'] = $moduleTitle;
                    $arrayData['pages'] = count($modulePages[$moduleID]);
                    $arrayData['subPages'] = $modulePages[$moduleID];
                    foreach ($moduleIcons as $id => $icons) {
                        if ($id == $moduleID) {
                            $arrayData['icon'] = $icons;
                        }
                    }
                    array_push($allData, $arrayData);
                }
            } else {

                $permissions = Auth::guard("web")->user()->allUserPermission();
                $userPermission = array_intersect_key($permissions, $modules);
                foreach ($userPermission as $k => $module) {
                    $arrayData['id'] = $k;
                    $arrayData['title'] = $modules[$k];
                    $subModule = array();
                    $count = 0;
                    foreach ($modulePages[$k] as $subModuleId => $subModuleTitle) {
                        $count++;
                        foreach ($module as $m => $v) {
                            if (preg_match("/\b$subModuleId\b/i", $m)) {
                                $subModule[$subModuleId] = $subModuleTitle;
                            }
                        }
                    }
                    $arrayData['subPages'] = $subModule;
                    $arrayData['pages'] = $count;
                    foreach ($moduleIcons as $id => $icons) {
                        if ($id == $k) {
                            $arrayData['icon'] = $icons;
                        }
                    }
                    array_push($allData, $arrayData);
                }
            }
            $view->with('modulesPermission', $allData);
            return $allData;
        });


        view()->composer('frontend.includes.master', function ($view) {

            $setting = Setting::find(1);

            $view->with('setting', $setting);

        });

        view()->composer('frontend.includes.master', function ($view) {

            $gallery = Gallery::orderBy('created_at', 'DESC')
                ->take(6)
                ->get();

            $view->with('gallery', $gallery);

        });

        view()->composer('frontend.shared.navbar', function ($view) {

            $setting = Setting::find(1);

            $view->with('setting', $setting);

        });

    }
}