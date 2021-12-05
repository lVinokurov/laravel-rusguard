<?php

namespace lVinokurov\RusGuard\Dto\Employee;

class CreateEmployeeDto
{
  /**
   * Имя
   * @var string
   */
  public string $first_name;

  /**
   * Фамилия
   * @var string
   */
  public string $last_name;

  /**
   * Отчество
   * @var string|null
   */
  public ?string $second_name = null;

  /**
   * Блокировать или нет
   * @var bool
   */
  public bool $is_change_locked_id = false;
}
