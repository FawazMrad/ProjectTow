<?php

namespace App\Services;

use App\Repositories\Interfaces\PaymentRepositoryInterface;

class PaymentService
{
    protected PaymentRepositoryInterface $paymentRepository;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    // Business logic will be added here later
}
