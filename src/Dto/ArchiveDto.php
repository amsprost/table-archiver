<?php

declare(strict_types=1);

namespace Linkorb\TableArchiver\Dto;

use DateTimeImmutable;

class ArchiveDto
{
    public string $tableName;
    public int $archiveMode;
    public string $stampColumnName;
    public bool $isTimestamp = false;
    public ?DateTimeImmutable $maxStamp = null;
}
