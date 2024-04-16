<?php
    class label implements Componente
    {
        public function __construct(private string $for = "",
        private string $texto = ""){}

        public function criar()
        {
            echo "<label for='{$this->for}'>{$this->texto}</label>";
        }
    }
?>