<?php

namespace App\Http\Controllers\Tax;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaxController extends Controller
{

    public function index() {
        return view('tax.switch');
    }

    public function switch(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('tax.switch', ['errors' => $errors]);
        }
        
        $request->flash();

        $result = $this->compute($request->amount, $request->tax_rate, $request->type);
        return view('tax.switch', ['result' => $result]);
    }

    private function compute($amount, $rate, $type) {
        $result = 0;
        $prefix = '含税';
        switch ($type) {
            case 0: $result = $amount * (1 + $rate / 100); break;
            case 1: $result = $amount / (1 + $rate / 100); $prefix = '不含税'; break;
            default: break;
        }
        $result = number_format($result, 10);
        $res = ['prefix' => $prefix, 'value' => $result];

        return $res;
//        return $prefix.$result;
    }


    protected function validator(array $data) {
        $messages = [
            'amount.required' => '必须提供金额',
            'amount.numeric' => '金额必须是数字',
            'tax_rate.required' => '必须提供税率',
            'tax_rate.numeric' => '税率必须是数字',
            'type.required' => '必须提供类型',
            'type.numeric' => '类型必须是数字'
        ];
        return Validator::make($data, [
            'amount' => 'bail|required|numeric',
            'tax_rate' => 'required|numeric',
            'type' => 'required|numeric'
        ], $messages);
    }
}
