<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCopyRequest;
use App\Http\Requests\UpdateCopyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CopyRepository;
use Illuminate\Http\Request;
use Flash;

class CopyController extends AppBaseController
{
    /** @var CopyRepository $copyRepository*/
    private $copyRepository;

    public function __construct(CopyRepository $copyRepo)
    {
        $this->copyRepository = $copyRepo;
    }

    /**
     * Display a listing of the Copy.
     */
    public function index(Request $request)
    {
        $copies = $this->copyRepository->paginate(10);

        return view('copies.index')
            ->with('copies', $copies);
    }

    /**
     * Show the form for creating a new Copy.
     */
    public function create()
    {
        return view('copies.create');
    }

    /**
     * Store a newly created Copy in storage.
     */
    public function store(CreateCopyRequest $request)
    {
        $input = $request->all();

        $copy = $this->copyRepository->create($input);

        Flash::success('Copy saved successfully.');

        return redirect(route('copies.index'));
    }

    /**
     * Display the specified Copy.
     */
    public function show($id)
    {
        $copy = $this->copyRepository->find($id);

        if (empty($copy)) {
            Flash::error('Copy not found');

            return redirect(route('copies.index'));
        }

        return view('copies.show')->with('copy', $copy);
    }

    /**
     * Show the form for editing the specified Copy.
     */
    public function edit($id)
    {
        $copy = $this->copyRepository->find($id);

        if (empty($copy)) {
            Flash::error('Copy not found');

            return redirect(route('copies.index'));
        }

        return view('copies.edit')->with('copy', $copy);
    }

    /**
     * Update the specified Copy in storage.
     */
    public function update($id, UpdateCopyRequest $request)
    {
        $copy = $this->copyRepository->find($id);

        if (empty($copy)) {
            Flash::error('Copy not found');

            return redirect(route('copies.index'));
        }

        $copy = $this->copyRepository->update($request->all(), $id);

        Flash::success('Copy updated successfully.');

        return redirect(route('copies.index'));
    }

    /**
     * Remove the specified Copy from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $copy = $this->copyRepository->find($id);

        if (empty($copy)) {
            Flash::error('Copy not found');

            return redirect(route('copies.index'));
        }

        $this->copyRepository->delete($id);

        Flash::success('Copy deleted successfully.');

        return redirect(route('copies.index'));
    }
}
