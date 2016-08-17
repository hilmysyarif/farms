<?php

if (! function_exists('display')) {
    /**
     * Get the evaluated view contents for the given view. This will consider current navigation.
     *
     * @param  string $view
     * @param  array $data
     * @param  array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function display($view = null, $data = [], $mergeData = []){
        $tmp = explode('/', $_SERVER['REQUEST_URI']);
        $current_nav = $tmp[1];
        $data['current_nav'] = $current_nav;
        $data['uri'] = $_SERVER['REQUEST_URI'];
        return view($view, $data, $mergeData);
    }
}