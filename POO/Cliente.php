<?php

class Cliente
{
    public string $logradouro;
    public string $bairro;

    public function verEndereco(): string
    {
        return "<p>Endereço: " . $this->logradouro . " / Bairro: " . $this->bairro . "</p>";
    }
}
