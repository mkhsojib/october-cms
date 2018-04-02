<?php 
class Cms5ac2013fae290820544219_a25b3db721f27cfd88e1e1f2549cb375Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
