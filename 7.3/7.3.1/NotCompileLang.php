<?php

class Handle
{
    /**
     * 具象クラスに依存しているため、クラスを差し替えるためにタイプヒンティングを修正する必要がある
     */
    public function __construct(DB $db, XML $xml)
    {
    }
}

class DB
{
    public function insert()
    {
        // 具体的な実装
    }
}

class XML
{
    public function read()
    {
       // 具体的な実装
    }

    public function write()
    {
        // 具体的な実装
    }
}

class HandleDIP
{
    public function __construct(DBInterface $db, XMLInterface $xml)
    {
    }

}

interface DBInterface
{
    public function insert();
}

interface XMLInterface
{
    public function read();

    public function write();
}
