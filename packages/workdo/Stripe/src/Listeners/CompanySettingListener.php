<?php

namespace Workdo\Stripe\Listeners;

use App\Events\CompanySettingEvent;

class CompanySettingListener
{
    /**
     * Handle the event.
     */
    public function handle(CompanySettingEvent $event): void
    {
        $module = 'Stripe';
        $methodName = 'index';
        $controllerClass = "Workdo\\Stripe\\Http\\Controllers\\Company\\SettingsController";
        if (class_exists($controllerClass)) {
            $controller = \App::make($controllerClass);
            if (method_exists($controller, $methodName)) {
                $html = $event->html;
                $settings = $html->getSettings();
                $output =  $controller->{$methodName}($settings);
                $html->add([
                    'html' => $output->toHtml(),
                    'order' => 1010,
                    'module' => $module,
                    'permission' => 'stripe manage'
                ]);
            }
        }
    }
}
