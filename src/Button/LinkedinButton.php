<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class LinkedinButton extends Button
{
  public string $name = 'linkedin';
  public string $type = 'linkedin';
  public string $classname = 'linkedin-share';

  public function __construct()
  {
    $this->setDataAttribute('counter', 'top');
  }
}
