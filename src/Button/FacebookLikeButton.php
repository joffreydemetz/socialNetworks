<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class FacebookLikeButton extends Button
{
  public string $name = 'facebookLike';
  public string $type = 'facebook';
  public string $classname = 'fb-like';

  public function __construct()
  {
    $this->setDataAttribute('layout', 'button');
    $this->setDataAttribute('action', 'like');
    // $this->setDataAttribute('href', null);
    // $this->setDataAttribute('size', null);
    // $this->setDataAttribute('share', false);
    // $this->setDataAttribute('show-faces', true);
  }
}
