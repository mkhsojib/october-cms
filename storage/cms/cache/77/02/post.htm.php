<?php 
class Cms5ac2176705a75621366142_01a2dd61c2f1fa39a3db9b709b2af5ccClass extends \Cms\Classes\PageCode
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
