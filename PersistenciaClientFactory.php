<?php

class PersistenciaClientFactory {
    static function createPersistencia($tipo_BBDD, $cadena_de_conexion) {
        switch($tipo_BBDD) {
            case 'mysql':
                return new PersistenciaClientMySql($cadena_de_conexion);
            case 'mongo':
                return new PersistenciaClientMongo($cadena_de_conexion);
            default:
                return null;
        }
    }
}

?>