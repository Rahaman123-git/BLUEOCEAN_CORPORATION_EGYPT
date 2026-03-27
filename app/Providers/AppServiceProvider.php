<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Course\Category;
use App\Models\Course\Seminar;
use App\Models\WebsiteContent\Location;
use App\Models\Blog\Blog;
use App\Models\Conference\Conference;
use Carbon\Carbon;

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
    	
    	if (request()->is('api/*')) {
        	return; // skip composers on API calls
  	  }
        // Share a model or record globally with all views
        View::composer('*', function ($view) {
            $certificationCategories = Category::where('course_type', 'CERTIFICATION_TRAINING')->get();
            $view->with('certificationCategories', $certificationCategories);
        });

        View::composer('*', function ($view) {
            $corporateCategories = Category::where('course_type', 'CORPORATE_TRAINING')->get();
            $view->with('corporateCategories', $corporateCategories);
        });

        View::composer('*', function ($view) {
            $seminars = Seminar::where('seminar_date', '>=', Carbon::now())->get();
            $view->with('seminars', $seminars);
        });
    	
    	View::composer('*', function ($view) {
            $locations = Location::get();
            $view->with('locations', $locations);
        });
		View::composer('*', function ($view) {
            $blogs = Blog::orderByDesc('id')
            ->take(3)
            ->get();
            $view->with('recentblogs', $blogs);
        });
    	View::composer('*', function ($view) {

			$upcomingConferences = Conference::whereDate('event_date', '>=', Carbon::today())
				->orderBy('event_date', 'asc')
				->get();
		
			$upcomingSeminars = Seminar::whereDate('seminar_date', '>=', Carbon::today())
				->orderBy('seminar_date', 'asc')
				->get();
		
			// Combine to one collection for ticker
			$headerEvents = collect();
		
			foreach ($upcomingConferences as $c) {
				$headerEvents->push([
					'type'  => 'Conference',
					'title' => $c->event_title,
					'date'  => Carbon::parse($c->event_date),
					'location' => $c->event_hotel_name.' , '.$c->event_location,
					'url'   => url($c->registration_url),
				]);
			}
		
			foreach ($upcomingSeminars as $s) {
				// ✅ keep your slug format (if your register route needs it)
				$ts = Carbon::createFromFormat('Y-m-d H:i:s', $s->seminar_date)->timestamp;
				$slug = $s->slug . '-' . $s->seminar_location . '-' . $ts;
		
				$headerEvents->push([
					'type'  => $s->seminar_type,
					'title' => $s->seminar_title ?? 'Seminar',
					'date'  => Carbon::parse($s->seminar_date),
                	 
					'location' => $s->seminar_location,
					'url'   => route('training.webinar.seminar.register', $slug),
				]);
			}
		
			// Sort all upcoming by date (nearest first)
			$headerEvents = $headerEvents->sortBy('date')->values();
		
			$view->with(compact('headerEvents', 'upcomingConferences', 'upcomingSeminars'));
		});
    }
}
