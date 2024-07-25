<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * Handle the Category "creating" event.
     */
    public function creating(Category $category): void
    {
        // create a unique slug
        $category->slug = Str::slug($category->name.'-'.Str::random(5));
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        $category->slug = Str::slug($category->name.'-'.Str::random(5));
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}
