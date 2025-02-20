<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFineRequest;
use App\Http\Requests\UpdateFineRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FineRepository;
use Illuminate\Http\Request;
use Flash;

class FineController extends AppBaseController
{
    /** @var FineRepository $fineRepository*/
    private $fineRepository;

    public function __construct(FineRepository $fineRepo)
    {
        $this->fineRepository = $fineRepo;
    }

    /**
     * Display a listing of the Fine.
     */
    public function index(Request $request)
    {
        $fines = $this->fineRepository->paginate(10);

        return view('fines.index')
            ->with('fines', $fines);
    }

    /**
     * Show the form for creating a new Fine.
     */
    public function create()
    {
        return view('fines.create');
    }

    /**
     * Store a newly created Fine in storage.
     */
    public function store(CreateFineRequest $request)
    {
        $input = $request->all();

        $fine = $this->fineRepository->create($input);

        Flash::success('Fine saved successfully.');

        return redirect(route('fines.index'));
    }

    /**
     * Display the specified Fine.
     */
    public function show($id)
    {
        $fine = $this->fineRepository->find($id);

        if (empty($fine)) {
            Flash::error('Fine not found');

            return redirect(route('fines.index'));
        }

        return view('fines.show')->with('fine', $fine);
    }

    /**
     * Show the form for editing the specified Fine.
     */
    public function edit($id)
    {
        $fine = $this->fineRepository->find($id);

        if (empty($fine)) {
            Flash::error('Fine not found');

            return redirect(route('fines.index'));
        }

        return view('fines.edit')->with('fine', $fine);
    }

    /**
     * Update the specified Fine in storage.
     */
    public function update($id, UpdateFineRequest $request)
    {
        $fine = $this->fineRepository->find($id);

        if (empty($fine)) {
            Flash::error('Fine not found');

            return redirect(route('fines.index'));
        }

        $fine = $this->fineRepository->update($request->all(), $id);

        Flash::success('Fine updated successfully.');

        return redirect(route('fines.index'));
    }

    /**
     * Remove the specified Fine from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fine = $this->fineRepository->find($id);

        if (empty($fine)) {
            Flash::error('Fine not found');

            return redirect(route('fines.index'));
        }

        $this->fineRepository->delete($id);

        Flash::success('Fine deleted successfully.');

        return redirect(route('fines.index'));
    }
}
