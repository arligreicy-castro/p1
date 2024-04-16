<?php
    class input implements Componente
    {
        public function __construct(private string $type = "",
        private string $name = "",private string $id = "",
        private string $value = ""){}

        public function criar()
        {
            echo "<input type='{$this->type}'name='{$this->name}'
            id='{$this->id}'value='{$this->value}'>";
        }
    }
?>