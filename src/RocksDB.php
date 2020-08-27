<?php
namespace RocksDB;

class RocksDB
{
    /**
     * @param bool $readonly
     * @param string $name
     * @return bool
     * Open the database with the specified "name"
     * if readonly is true, Open the database for read only
     */
    public function open($name, $readonly = false)
    {
        return true;
    }

    /**
     * @param $key string
     * @param $value string
     * @param string $column
     * @return bool
     * Set the database entry for "key" to "value".
     * If "key" already exists, it will be overwritten.
     */
    public function put($key, $value, $column = 'default')
    {
        return true;
    }

    /**
     * @param $key string
     * @param string $column
     * @return string
     * If the database contains an entry for "key" return the
     * corresponding value.
     */
    public function get($key, $column = 'default')
    {
        return "";
    }

    /**
     * @param $keys string[]
     * @param $columns string[]
     * @return string[]
     * Consistent Get of many keys across column families
     */
    public function mGet($keys, $columns = [])
    {
        return [];
    }

    /**
     * @return string
     * return the last error
     */
    public function lastError()
    {
        return "";
    }
}
