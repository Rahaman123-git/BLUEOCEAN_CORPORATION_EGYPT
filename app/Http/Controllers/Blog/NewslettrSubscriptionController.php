<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Blog\NewsletterSubscription;

class NewslettrSubscriptionController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $newsletterSubscriptions = NewsletterSubscription::all();
        return view('blogs.newsletter-subscriptions.index', compact('newsletterSubscriptions'));
    }
}