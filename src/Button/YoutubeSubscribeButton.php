<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class YoutubeSubscribeButton extends Button
{
  public string $name = 'youtubeSubscribe';
  public string $type = 'youtube';
  public string $classname = 'g-ytsubscribe';

  public function __construct()
  {
    $this->setDataAttribute('layout', 'default');
    $this->setDataAttribute('count', 'default');
    // $this->setDataAttribute('channel', null);
  }
}
