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

    public static function getUserById($id)
    {
        $sql = "SELECT * FROM " .static::$table . " WHERE id = '{$id}'";
        $stmt = self::connect()->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public static function update(array $data, int $id)
    {
        $items = "";
        foreach ($data as $key => $value) {
            $items .= "{$key} = '{$value}',";
        }
        $fixeditems = rtrim($items, ",");

        $sql = "UPDATE " . static::$table . " SET {$fixeditems} WHERE id = :id";
        $statement = self::connect()->prepare($sql);
        $statement->bindParam(':id', $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete(int $id)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE id = '{$id}'";
        $stmt = self::connect()->prepare($sql);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public static function authors()
    {
        $sql = "SELECT author, COUNT(name) AS books FROM " . static::$table . " GROUP BY author";
        $stmt = self::connect()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public static function genres()
    {
        $sql = "SELECT genre, COUNT(name) AS books FROM " . static::$table . " GROUP BY genre";
        $stmt = self::connect()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);     
    }
    
    public static function attach($data)
    {
        $string_values = "";

        foreach($data as $key => $value){
            if($key == 'password'){
                $value = md5($value);
            }
            $string_values = $string_values . "{$key} = '{$value}' AND ";
        }
        $string_values = rtrim($string_values, ' AND');
        
        $sql = "SELECT * FROM " . static::$table . " WHERE {$string_values}";
        $statement = self::connect()->query($sql);
        return $statement->fetch(PDO::FETCH_OBJ);
    }

}
?>