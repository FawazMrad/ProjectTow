<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\BillService;
use Illuminate\Http\Request;


class BillController extends Controller
{
    protected BillService $billService;
    public function __construct(BillService $billService){
        $this->billService = $billService;
    }

    public function index(){
        $data=$this->billService->getAllBills();
        if($data==null){
            return response()->json(['No data found'],404);
        }
        return response()->json($data,200);
    }
    public function getBillWithPayments(Request $request,$id)
    {
        $billId=$id;
        $data=$this->billService->getBillWithPayments($billId);
        if($data==null){
            return response()->json(['No data found'],404);
        }
        return response()->json($data,200);
    }
    public function search($patient_name)
    {
        $bills = $this->billService->searchByPatientName($patient_name);

        if ($bills->isEmpty()) {
            return response()->json(['message' => 'No bills found for this patient name.'], 404);
        }

        return response()->json($bills);
    }
}
