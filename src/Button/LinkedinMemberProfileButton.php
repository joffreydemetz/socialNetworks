<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\Button;

class LinkedinMemberProfileButton extends Button
{
  public string $name = 'linkedinMemberProfile';
  public string $type = 'linkedin';
  public string $classname = 'linkedin-member-profile';

  public function __construct()
  {
    $this->setDataAttribute('format', 'inline');
    $this->setDataAttribute('related', false);
    // $this->setDataAttribute('id', null);
    // $this->setDataAttribute('text', null);
  }
}
