<?php namespace Sojib\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name' => 'Sojib',
      'description' => 'Provides company resources',
      'author' => 'Sojib',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents()
  {
    return [
      '\Sojib\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}
