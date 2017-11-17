<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */
namespace ComPHPPuebla\Fixtures\Database;

interface Connection
{
    /**
     * It assigns the auto generated ID to the row if any
     */
    public function insert(string $table, Row $row): void;

    public function getPrimaryKeyOf(string $table): string;
}
