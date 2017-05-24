<?php
namespace Vostro\Calculator\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a,$b){
        echo $a+$b;
    }
}
