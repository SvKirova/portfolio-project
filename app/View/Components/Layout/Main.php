<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /*
     * The navbar items
     */
    public array $navItems = [
        ['route' => 'home', 'title' => 'Home'],
        ['route' => 'profile', 'title' => 'Profile'],
        ['route' => 'dashboard.index', 'title' => 'Dashboard'],
        ['route' => 'faqs.index', 'title' => 'FAQ'],
        ['route' => 'posts.index', 'title' => 'Blog']
    ];

    public array $asideItems = [
        ['link' =>
            'https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#111-course-and-examination-regulations',
            'title' => 'HZ HBO-ICT Course and Examination Regulations (CER)'],
        ['link' =>
            'https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#chapter-2-implementation-regulation-hz-cer',
            'title' => 'The Implementation Regulations (IR)'],
        ['link' => 'https://learn.hz.nl/my/', 'title' => 'Learn environment'],
        ['link' => 'https://hz.osiris-student.nl/voortgang', 'title' => 'My HZ Progress'],
        ['link' => 'https://github.com/HZ-HBO-ICT', 'title' => 'HBO-ICT GitHub']
    ];

    /**
     * Create a new component instance.
     * @param string $description
     * @param string $keywords
     * @param string $title
     */
    public function __construct(
        public string $description = 'This is my portfolio website',
        public string $keywords = 'ICT, HZ, Portfolio',
        public string $title = 'Portfolio'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.main');
    }
}
