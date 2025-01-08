<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class TwitterButton extends Button
{
  public string $name = 'twitter';
  public string $type = 'twitter';
  public string $classname = 'twitter-share';

  public function __construct()
  {
    // $this->setDataAttribute('url', null);
    // $this->setDataAttribute('text', null);
    // $this->setDataAttribute('hashtags', null);
    // $this->setDataAttribute('size', null);
  }
}
