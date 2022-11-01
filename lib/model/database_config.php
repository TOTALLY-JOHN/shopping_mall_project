<?php
    class DatabaseConfig {
        public const PRODUCTION_ENV = "PRODUCTION";
        public const DEVELOPMENT_ENV = "DEVELOPMENT";

        public static function getDatabaseConfig($environment) {
            if ($environment === "PRODUCTION") {
              $dbc = @mysqli_connect ('localhost', 'id19471600_tech_admin', 'q7H<RwJpc^!Q{8{7', 'id19471600_tech_database') OR die ('Could not connect to MySQL: ' . mysqli_connect_error());  
            } else if ($environment === "DEVELOPMENT") {
              $dbc = @mysqli_connect ('peterlab.org', 'totally', 'totallyDb', 'totally') OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
            } else { return null; }
            return $dbc;
        }
    }
?>