<?php
include_once '../index.php';

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');
