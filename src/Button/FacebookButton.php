<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class FacebookButton extends Button
{
  public string $name = 'facebook';
  public string $type = 'facebook';
  public string $classname = 'fb-share-button';

  public function __construct()
  {
    $this->setDataAttribute('layout', 'button');
    $this->setDataAttribute('size', 'small');
  }
}
