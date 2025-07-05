<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Breadcrumb extends Component
{
    public string $heading;
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct(string $heading = null, array $links = [])
    {
        $this->links = $links ?: $this->generateFromRoute();
        $keys = array_keys($this->links);
        $this->heading = $heading ?? ($keys ? end($keys) : 'Dashboard');
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb');
    }

    protected function generateFromRoute()
    {
        $segments = request()->segments();
        $breadcrumbs = ['विश्लेषण' => route('dashboard')];

        $path = '';
        foreach ($segments as $segment) {
            $path .= '/' . $segment;
            $label = Str::title(str_replace('-', ' ', $segment));
            $breadcrumbs[$label] = url($path);
        }

        return $breadcrumbs;
    }
}
