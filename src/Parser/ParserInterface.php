<?php

declare(strict_types=1);

namespace Setono\EditorJS\Parser;

use Setono\EditorJS\Parser\BlockParser\BlockParserInterface;

interface ParserInterface
{
    /**
     * @param string $json the output from the EditorJS javascript instance
     */
    public function parse(string $json): Result;

    public function addBlockParser(BlockParserInterface $blockParser): void;
}
