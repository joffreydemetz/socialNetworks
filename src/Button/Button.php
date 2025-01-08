<?php

/**
 * @author    Joffrey Demetz <joffrey.demetz@gmail.com>
 * @license   MIT License; <https://opensource.org/licenses/MIT>
 */

namespace JDZ\Social\Button;

use JDZ\Social\Button\ButtonInterface;

abstract class Button implements ButtonInterface
{
  public string $name;
  public string $type;
  public string $classname = '';
  public array $data = [];

  public function export(array $attrs = [], string $innerContent = ''): array
  {
    if (empty($attrs['class'])) {
      $attrs['class'] = [];
    }

    $attrs['class'][] = $this->classname;

    foreach ($this->data as $key => $value) {
      $attrs['data-' . $key] = $value;
    }

    return [
      'name' => $this->name,
      'type' => $this->type,
      'attrs' => $attrs,
      'inner' => $innerContent,
    ];
  }

  public function setDataAttribute(string $key, string $value)
  {
    $this->data[$key] = $value;
    return $this;
  }
}