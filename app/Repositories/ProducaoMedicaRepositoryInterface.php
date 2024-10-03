<?php

namespace App\Repositories;

interface ProducaoMedicaRepositoryInterface
{
  public function getEspelhoPagamentoProducaoMedica($fpdf, $contratoFinanceiro, $autoId, $compFinanceira);
}
