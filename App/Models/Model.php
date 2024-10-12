<?php
namespace App\Models;
use App\Database\Database;
USE PDO;

class Model extends Database
{
    protected static $table;

    public static function getAll()
    {
        $sql = "SELECT * FROM " . static::$table;
        $query = self::connect()->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function create()
    {
        
    }


}

?>