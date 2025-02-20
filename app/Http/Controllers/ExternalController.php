<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExternalRequest;
use App\Http\Requests\UpdateExternalRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ExternalRepository;
use Illuminate\Http\Request;
use Flash;

class ExternalController extends AppBaseController
{
    /** @var ExternalRepository $externalRepository*/
    private $externalRepository;

    public function __construct(ExternalRepository $externalRepo)
    {
        $this->externalRepository = $externalRepo;
    }

    /**
     * Display a listing of the External.
     */
    public function index(Request $request)
    {
        $externals = $this->externalRepository->paginate(10);

        return view('externals.index')
            ->with('externals', $externals);
    }

    /**
     * Show the form for creating a new External.
     */
    public function create()
    {
        return view('externals.create');
    }

    /**
     * Store a newly created External in storage.
     */
    public function store(CreateExternalRequest $request)
    {
        $input = $request->all();

        $external = $this->externalRepository->create($input);

        Flash::success('External saved successfully.');

        return redirect(route('externals.index'));
    }

    /**
     * Display the specified External.
     */
    public function show($id)
    {
        $external = $this->externalRepository->find($id);

        if (empty($external)) {
            Flash::error('External not found');

            return redirect(route('externals.index'));
        }

        return view('externals.show')->with('external', $external);
    }

    /**
     * Show the form for editing the specified External.
     */
    public function edit($id)
    {
        $external = $this->externalRepository->find($id);

        if (empty($external)) {
            Flash::error('External not found');

            return redirect(route('externals.index'));
        }

        return view('externals.edit')->with('external', $external);
    }

    /**
     * Update the specified External in storage.
     */
    public function update($id, UpdateExternalRequest $request)
    {
        $external = $this->externalRepository->find($id);

        if (empty($external)) {
            Flash::error('External not found');

            return redirect(route('externals.index'));
        }

        $external = $this->externalRepository->update($request->all(), $id);

        Flash::success('External updated successfully.');

        return redirect(route('externals.index'));
    }

    /**
     * Remove the specified External from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $external = $this->externalRepository->find($id);

        if (empty($external)) {
            Flash::error('External not found');

            return redirect(route('externals.index'));
        }

        $this->externalRepository->delete($id);

        Flash::success('External deleted successfully.');

        return redirect(route('externals.index'));
    }
}
