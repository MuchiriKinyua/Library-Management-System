<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWaitingRequest;
use App\Http\Requests\UpdateWaitingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WaitingRepository;
use Illuminate\Http\Request;
use Flash;

class WaitingController extends AppBaseController
{
    /** @var WaitingRepository $waitingRepository*/
    private $waitingRepository;

    public function __construct(WaitingRepository $waitingRepo)
    {
        $this->waitingRepository = $waitingRepo;
    }

    /**
     * Display a listing of the Waiting.
     */
    public function index(Request $request)
    {
        $waitings = $this->waitingRepository->paginate(10);

        return view('waitings.index')
            ->with('waitings', $waitings);
    }

    /**
     * Show the form for creating a new Waiting.
     */
    public function create()
    {
        return view('waitings.create');
    }

    /**
     * Store a newly created Waiting in storage.
     */
    public function store(CreateWaitingRequest $request)
    {
        $input = $request->all();

        $waiting = $this->waitingRepository->create($input);

        Flash::success('Waiting saved successfully.');

        return redirect(route('waitings.index'));
    }

    /**
     * Display the specified Waiting.
     */
    public function show($id)
    {
        $waiting = $this->waitingRepository->find($id);

        if (empty($waiting)) {
            Flash::error('Waiting not found');

            return redirect(route('waitings.index'));
        }

        return view('waitings.show')->with('waiting', $waiting);
    }

    /**
     * Show the form for editing the specified Waiting.
     */
    public function edit($id)
    {
        $waiting = $this->waitingRepository->find($id);

        if (empty($waiting)) {
            Flash::error('Waiting not found');

            return redirect(route('waitings.index'));
        }

        return view('waitings.edit')->with('waiting', $waiting);
    }

    /**
     * Update the specified Waiting in storage.
     */
    public function update($id, UpdateWaitingRequest $request)
    {
        $waiting = $this->waitingRepository->find($id);

        if (empty($waiting)) {
            Flash::error('Waiting not found');

            return redirect(route('waitings.index'));
        }

        $waiting = $this->waitingRepository->update($request->all(), $id);

        Flash::success('Waiting updated successfully.');

        return redirect(route('waitings.index'));
    }

    /**
     * Remove the specified Waiting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $waiting = $this->waitingRepository->find($id);

        if (empty($waiting)) {
            Flash::error('Waiting not found');

            return redirect(route('waitings.index'));
        }

        $this->waitingRepository->delete($id);

        Flash::success('Waiting deleted successfully.');

        return redirect(route('waitings.index'));
    }
}
