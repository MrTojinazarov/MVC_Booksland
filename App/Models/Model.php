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

    public static function create(array $data)
    {
        $keys = implode(",", array_keys($data));
        $values = implode(",", array_fill(0, count($data), '?'));
        
        $sql = "INSERT INTO " . static::$table . " ({$keys}) VALUES ({$values})";
        $statement = self::connect()->prepare($sql);
        $values = array_values($data);
        if ($statement->execute($values)) {
            return true;
        } else {
            return false;
        }
    }
    


}

?>