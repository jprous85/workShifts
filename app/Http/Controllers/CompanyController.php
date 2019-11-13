<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;

class CompanyController extends Controller
{

    public function view()
    {
        $user = Auth::user();
        return view('company.company', compact('user'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {

        $company = Company::orderBy('id', 'ASC')->paginate(5);

        return [
            'paginator' => [
                'total' => $company->total(),
                'current_page' => $company->currentPage(),
                'per_page' => $company->perPage(),
                'last_page' => $company->lastPage(),
                'from' => $company->firstItem(),
                'to' => $company->lastPage()
            ],
            'company' => $company
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            Company::create($request->all());
            return new JsonResponse([
                'data' => 'ok'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'data' => 'ko'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Company $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            Company::findOrFail($id)->update($request->all());
            return new JsonResponse([
                'data' => 'ok'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['data' => 'ko']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            Company::findOrFail($id)->delete();
            return new JsonResponse([
                'data' => 'ok'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['data' => 'ko']);
        }
    }
}
