<?php

class Cities extends Table {

    public $id = 0;
    public $name = '';

    public function validate()
    {
        return false;
    }

    public static function getAll() {
        $db = Database::getDB();

        return $db->query("SELECT * FROM `cities`")->fetchAll(PDO::FETCH_ASSOC);
    }
}