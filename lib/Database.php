<?php
class Database extends PDO 
{
   public function __construct() {
    parent::__construct(HOST_DB_NAME, USER_DB, PASSWORD_DB);    
   } 
}