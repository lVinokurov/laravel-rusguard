<?php

namespace lVinokurov\RusGuard\Dto\Group;

class CreateGroupDto
{
  /**
   * Название группы
   *
   * @var string
   */
  public string $name;

  /**
   * Id родительской группы
   *
   * @var string|null
   */
  public ?string $parent_id = null;
}
