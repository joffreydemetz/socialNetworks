<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class LinkedinFollowCompanyButton extends Button
{
  public string $name = 'linkedinFollowCompany';
  public string $type = 'linkedin';
  public string $classname = 'linkedin-follow-company';

  public function __construct()
  {
    $this->setDataAttribute('counter', 'top');

    // $this->setDataAttribute('id', null);
  }
}
