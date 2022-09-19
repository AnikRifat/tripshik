<?php

namespace App\Providers;

use App\Models\Content;
use App\Models\Position;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $content = Content::find('1');
        View::share('content', $content);
        $service_item = Service::all();
        View::share('service_item', $service_item);

        $slider = Slider::all();
        View::share('slider', $slider);
        $positions = Position::all();
        view::share('positions', $positions);

        $testimonials = Testimonial::all();
        view::share('testimonials', $testimonials);
    }
}
