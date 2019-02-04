<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 27/01/19
 * Time: 15:11.
 */

namespace Scherzetto\TestCase;

use PHPUnit\Framework\TestCase as BaseCase;
use Scherzetto\Env\EnvVarsSetter;
use Scherzetto\Env\Parser\DotenvParser;

class TestCase extends BaseCase
{
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        (new EnvVarsSetter(new DotenvParser()))->loadEnv('.env');
        parent::__construct($name, $data, $dataName);
    }
}
