<?php
namespace FizzBuzz;

class FizzBuzz
{

    const PRIMER_NUMERO_DE_LA_LISTA = 1;
    const ULTIMO_NUMERO_DE_LA_LISTA = 100;

    public function visualizarLista()
    {
        for ($numero = 1; $numero <= 100; $numero++) {
            echo $this->mostrarValor($numero) . "\n";
        }
    }

    protected function siElValorDelRestoEsCeroEsDivisible($resto)
    {
        $valorADevolver = false;
        if ($resto == 0) {
            $valorADevolver = true;
        }

        return $valorADevolver;
    }

    public function esDivisiblePorTres($numeroACalcular)
    {
        $resto = $numeroACalcular % 3;
        return $this->siElValorDelRestoEsCeroEsDivisible($resto);

    }

    public function esDivisiblePorCinco($numeroACalcular)
    {
        $resto = $numeroACalcular % 5;
        return $this->siElValorDelRestoEsCeroEsDivisible($resto);
    }


    public function mostrarValor($numeroACalcular)
    {
        $esDivisiblePorTres = false;
        if ($this->esDivisiblePorTres($numeroACalcular)) {
            $esDivisiblePorTres = true;
        }

        $esDivisiblePorCinco = false;
        if ($this->esDivisiblePorCinco($numeroACalcular)) {
            $esDivisiblePorCinco = true;
        }

        if ($esDivisiblePorCinco && $esDivisiblePorTres) {
            return 'FizzBuzz';
        } else if ($esDivisiblePorCinco) {
            return 'Buzz';
        } else if ($esDivisiblePorTres) {
            return 'Fizz';
        } else {
            return $numeroACalcular;
        }


    }
}