<?php 
class Cms5ac205406368c564253588_67f4478d5c0ded291458d26e1d6060c7Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
