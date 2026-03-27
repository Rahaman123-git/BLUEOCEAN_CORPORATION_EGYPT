<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogEvent;
use App\Models\Blog\NewsletterSubscription;

class BlogController extends Controller
{
    public function index(): View
    {
        $perPage = 12;

        $blogList['insideBlueOceanLatest'] = Blog::where('blog_type', 'INSIDE_BLUE_OCEAN')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        $blogList['expertEdgeInsightLatest'] = Blog::where('blog_type', 'EXPERT_EDGE_INSIGHTS')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        $filterOutBlogIds = [];/* collect($blogs['insideBlueOceanLatest'])
            ->merge($blogs['expertEdgeInsightLatest'])
            ->pluck('id')
            ->toArray(); */

        $blogList['otherBlogs'] = Blog::when(!empty($filterOutBlogIds), function ($query) use ($filterOutBlogIds) {
                $query->whereNotIn('id', $filterOutBlogIds);
            })
            ->orderByDesc('id')
            ->paginate($perPage);  
        
        return view('frontend.blog.home', compact('blogList'));
    }
    
    public function blogDetails($slug): View
    {
        $blog = Blog::where('slug', $slug)->first();

        if($blog){
            $blogEvents = BlogEvent::where('blog_id', $blog->id)->get();
            $highlightedBlogEvent = BlogEvent::where('blog_id', $blog->id)
                ->where('is_highlighted_event', 'YES')
                ->inRandomOrder()
                ->first();

            return view('frontend.blog.details', compact('blog', 'blogEvents', 'highlightedBlogEvent'));
        }else{
            abort(404);
        }
    }

    public function eventDetails($slug): View
    {
        $blogEvent = BlogEvent::where('slug', $slug)->first();

        if($blogEvent){
            $relatedBlogEvents = BlogEvent::where('blog_id', $blogEvent->blog_id)
                ->where('id', '!=', $blogEvent->id)
                ->latest()
                ->take(3)
                ->get();
            return view('frontend.blog.event-details', compact('blogEvent', 'relatedBlogEvents'));
        }else{
            abort(404);
        }
    }
	
	public function subscribeNewsletter(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first('email'),
            ]);
        }

        NewsletterSubscription::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for subscribing!',
        ]);
    }
}