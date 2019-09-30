<?php
namespace App\Models\Contract;

class BaseModel implements CRUD
{
    public static $conn;
    public static $table;
    public static $primary_key = 'id';


    /**
     * Class constructor.
     */
    public function __construct()
    {
        global $medoo;
        self::$conn = $medoo;
    }

    public function create($data)
    {
        self::$conn->insert(static::$table, $data);
        return self::$conn->id();
    }
    public function read($column ='*', $where = array())
    {
        $records = self::$conn->select(static::$table, $column, $where);
        return array_of_object($records);
    }
    public function update($data, $where)
    {
        $result = self::$conn->update(static::$table, $data, $where);
        return $result->rowCount();
    }
    public function delete($where)
    {
        $result = self::$conn->delete(static::$table, $where);
        return $result->rowCount();
    }
    public function query($query)
    {
        return self::$conn->query($query);
    }

    public function count($where = array())
    {
        return self::$conn->count(static::$table, $where);
    }
    public function findBy($field, $value)
    {
        return $this->read('*', [$field => $value]);
    }

    public function countBy($field, $value)
    {
        return count($this->findBy($field, $value));
    }
}
