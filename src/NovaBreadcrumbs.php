<?php

namespace ChrisWare\NovaBreadcrumbs;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Laravel\Nova\Http\Requests\NovaRequest;

class NovaBreadcrumbs extends Tool
{
    protected $loadStyles = true;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-breadcrumbs', __DIR__ . '/../dist/js/tool.js');
        if ($this->loadStyles) {
            Nova::style('nova-breadcrumbs', __DIR__ . '/../dist/css/tool.css');
        }
    }

    /**
     * Build the view that renders the navigation links for the tool.
     */
    public function renderNavigation()
    {
        return false;
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return \Laravel\Nova\Menu\MenuSection|array
     */
    public function menu(\Laravel\Nova\Http\Requests\NovaRequest $request)
    {
        return null;
    }

    public function withoutStyles()
    {
        $this->loadStyles = false;

        return $this;
    }
}
