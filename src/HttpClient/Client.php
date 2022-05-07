<?php

declare(strict_types=1);

namespace App\HttpClient;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class Client implements GetContentInterface
{
    public function __construct(
        private ParameterBagInterface $parameterBag
    )
    {
    }

    public function getContent(): string
    {
        return file_get_contents($this->parameterBag->get('path.json'));
    }
}
