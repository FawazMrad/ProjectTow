<?php

namespace App\Services;

use App\Repositories\Interfaces\BillRepositoryInterface;

class BillService
{
    protected BillRepositoryInterface $billRepository;

    public function __construct(BillRepositoryInterface $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    public function getAllBills(){
        return $this->billRepository->all();
    }
    public function getBillWithPayments($billId)
    {
        return $this->billRepository->findByIdWithPayments($billId);
    }
    public function searchByPatientName(string $patientName)
    {
        return $this->billRepository->searchByPatientName($patientName);
    }

}
