<?php

    namespace MF\Model;
    use App\Connection;

    class Container {

        public static function getModel($model) {

            //Instanciar modelo solicitado com conexão estabelecida
            $class = "\\App\\Models\\".ucfirst($model);
            $conn = Connection::getDb();
            return new $class($conn);
        }
    }

?>