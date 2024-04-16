<?php
    class form implements Componente
    {
        public function __construct(private string $action = "",
        private string $method = "",private array $elementos = array()){}

        public function criar()
        {
            echo "<form action='{$this->action}'method='{$this->method}'>";

                foreach($this->elementos as $objeto)
                {
                    $objeto->criar();
                }

            echo "</form>";
            
        }
        public function setElementos($elemento)
        {
            $this->elementos[] = $elemento;
        }
    }
?>