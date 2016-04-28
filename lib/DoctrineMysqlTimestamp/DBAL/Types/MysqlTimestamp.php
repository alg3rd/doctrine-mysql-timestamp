<?php
namespace DoctrineMysqlTimestamp\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\DateTimeType;

class MysqlTimestamp extends DateTimeType
{
    public function getName()
    {
        return 'mysql_timestamp';
    }

    public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'TIMESTAMP';
    }
}