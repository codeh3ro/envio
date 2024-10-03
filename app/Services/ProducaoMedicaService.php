<?php

namespace App\Services;
use App\Repositories\ProducaoMedicaRepositoryInterface;
use \Codedge\Fpdf\Fpdf\Fpdf;

class ProducaoMedicaService
{
  public function __construct(protected ProducaoMedicaRepositoryInterface $repository)
  {
  }

  public function getEspelhoPagamentoProducaoMedica(Fpdf $fpdf, string $contratoFinanceiro, string $autoId, string $compFinanceira)
  {
    return $this->repository->getEspelhoPagamentoProducaoMedica($fpdf, $contratoFinanceiro, $autoId, $compFinanceira);
  }
}
