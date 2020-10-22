<?php

use application\core\Model;

class GetpostModel extends Model
{
    const TABLE = 'posts';

    public function getData()
    {
        return $this->execute("SELECT `id`, `content`, `name` FROM ".self::TABLE);
    }

    public function getDataByID(int $id)
    {
        return $this->execute("SELECT `id`, `content`, `name` FROM ".self::TABLE." WHERE `id` = :id", ['id' => $id]);
    }
}