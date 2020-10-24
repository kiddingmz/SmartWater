<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Traits\PaymentsTrait;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class IncomeController extends Controller
{
    use PaymentsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $this->handlePayment();

        $incomes = Income::orderBy('created_at', 'desc')->get();

        return view('admin.incomes.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.incomes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        if($this->canSaveData($request)){
            //dd($request->all()); //debug

            //Gravar os dados

            $income = Income::create($request->only(['title', 'description', 'amount', 'from', 'to', 'status', 'user_id']));
            return redirect()->back()->with(['Success' => 'Pagamento adicionado com sucesso.']);
        }
    }

    private function canSaveData(Request $request){
        $request->validate([
            'title'       => 'required|min:2|max:100',
            'amount'      => 'required|numeric',
            'description' => 'nullable|min:5',
            'from'        => 'nullable|min:2|max:100',
            'to'          => 'nullable|min:2|max:100',
        ]);
        return true;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        //
    }
}
