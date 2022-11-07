<?php
    /**
     * Contador
     * @author Gontzal García Triviño
     */
    class Contador{
        private $numero;
        private static $instance;

        public function __construct(){
            $this->numero=0;
            self::$instance++;
        }

        public function contador(){
            return $this->numero++;
        }

        public function toString(){
            return 'Contador: '.$this->numero;
        }

        public static function contarInstancias(){
            return self::$instance;
        }
    }

?>