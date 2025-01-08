<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class FacebookPageButton extends Button
{
  public string $name = 'facebookPage';
  public string $type = 'facebook';
  public string $classname = 'fb-page';

  public function __construct()
  {
    $this->setDataAttribute('tabs', 'timeline');
    $this->setDataAttribute('show-facepile', 'false');

    // $this->setDataAttribute('href', null);
    // $this->setDataAttribute('small-header', false);
    // $this->setDataAttribute('hide-cover', false);
    // $this->setDataAttribute('width', null);
    // $this->setDataAttribute('height', null);
    // $this->setDataAttribute('adapt-container-width', false);
  }
}
