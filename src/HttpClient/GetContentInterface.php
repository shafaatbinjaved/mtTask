<?php

declare(strict_types=1);

namespace App\HttpClient;

interface GetContentInterface
{
    public function getContent(): string;
}
