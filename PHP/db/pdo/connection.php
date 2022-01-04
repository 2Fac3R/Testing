<?php

Class Connection
{
    public function connect( )
    {
        try 
        {
            return new PDO(
                'sqlite:./database.sqlite',
                null,
                null,
                array(PDO::ATTR_PERSISTENT => true)
            );
        }
        catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }

}

?>