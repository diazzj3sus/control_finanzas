<?php
    class Database{
        const DBHOSTNAME = 'localhost';
        const DBUSER = 'root';
        const DBPASSWORD = '';
        const DBNAME = 'control_finanzas';
        const CHARSET = 'utf8mb4';

        public function create_connection(){
            @$connection = new mysqli(self::DBHOSTNAME,
                                    self::DBUSER,
                                    self::DBPASSWORD,
                                    self::DBNAME);
            if ($connection->connect_error){
                echo "Error al conectar a la base de datos", $connection->connect_error;
                exit();
            }else{
                return $connection;
            }
        }

        public function close_connection($connection){
            $connection->close();
        }
    }
?>