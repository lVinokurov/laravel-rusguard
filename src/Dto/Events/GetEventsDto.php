<?php

namespace lVinokurov\RusGuard\Dto\Events;

class GetEventsDto
{
  /**
   * @var string[]|null
   */
  public ?array $subTypes = null;

  /**
   * @var string
   */
  public string $fromDateTime;
  /**
   * @var string
   */
  public string $toDateTime;
}
