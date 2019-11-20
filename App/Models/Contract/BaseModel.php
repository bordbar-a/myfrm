<?php

namespace App\Models\Contract;


abstract class BaseModel implements CRUD
{
    public static $table_fields;
    public $fields;
    public static $conn;
    public static $table;
    public static $primary_key = 'id';


    /**
     * Class constructor.
     */
    public function __construct($id = null)
    {
        $this->fields = array();
        global $medoo;
        self::$conn = $medoo;
        if (!is_null($id)) {
            return $this->find($id);
        }
    }

    public function create($data)
    {
        self::$conn->insert(static::$table, $data);
        $this->id = self::$conn->id();
        return $this;
    }

    public function read($column = '*', $where = array())
    {
        $records = self::$conn->select(static::$table, $column, $where);
        return array_of_object($records);
    }

    public function update($data, $where)
    {
        $result = self::$conn->update(static::$table, $data, $where);
        $this->affected_row = $result->rowCount();
        return $this;
    }

    public function delete($where = null)
    {
        if (is_null($where)) {
           $result = self::$conn->delete(static::$table,
                [static::$primary_key => $this->fields[static::$primary_key]]);

           $this->deleted_row = $this->id;
           $this->id = '';
           return $this;

        }

        $result = self::$conn->delete(static::$table, $where);
        $this->affected_row =  $result->rowCount();
        return $this;
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


    public function find_by_primary_key($id)
    {
        return self::read('*', array(static::$primary_key => $id))[0];
    }


    public function find($id)
    {
        $this->fields = self::$conn->get(static::$table, '*', [static::$primary_key => $id]);
        return $this;
    }

    public function __get($field)
    {
        if (isset($this->fields[$field])) {
            return $this->fields[$field];
        }
        return null;
    }


    public function __set($field, $value)
    {


        if (in_array($field, static::$table_fields)) {
            $this->fields[$field] = $value;
            return;
        }
        $this->$field = $value;

    }


    public function save()
    {
        if (isset($this->fields[static::$primary_key])) {
            return $this->update($this->fields, [static::$primary_key => $this->fields[static::$primary_key]]);
        }
        return $this->create($this->fields);
    }

}
