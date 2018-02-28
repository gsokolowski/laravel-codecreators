<?php

namespace App\Widgets;

use App\Slideshow;
use Arrilot\Widgets\AbstractWidget;

class GallerySlideshow extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        $slideshow = Slideshow::first();
        //dd($slideshow->slides);

        return view('widgets.gallery_slideshow', [
            'config' => $this->config,
            'slides' => $slideshow->slides
        ]);
    }
}
