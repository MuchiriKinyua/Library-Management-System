<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBorrowingRequest;
use App\Http\Requests\UpdateBorrowingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BorrowingRepository;
use Illuminate\Http\Request;
use Flash;

class BorrowingController extends AppBaseController
{
    /** @var BorrowingRepository $borrowingRepository*/
    private $borrowingRepository;

    public function __construct(BorrowingRepository $borrowingRepo)
    {
        $this->borrowingRepository = $borrowingRepo;
    }

    /**
     * Display a listing of the Borrowing.
     */
    public function index(Request $request)
    {
        $borrowings = $this->borrowingRepository->paginate(10);

        return view('borrowings.index')
            ->with('borrowings', $borrowings);
    }

    /**
     * Show the form for creating a new Borrowing.
     */
    public function create()
    {
        return view('borrowings.create');
    }

    /**
     * Store a newly created Borrowing in storage.
     */
    public function store(CreateBorrowingRequest $request)
    {
        $input = $request->all();

        $borrowing = $this->borrowingRepository->create($input);

        Flash::success('Borrowing saved successfully.');

        return redirect(route('borrowings.index'));
    }

    /**
     * Display the specified Borrowing.
     */
    public function show($id)
    {
        $borrowing = $this->borrowingRepository->find($id);

        if (empty($borrowing)) {
            Flash::error('Borrowing not found');

            return redirect(route('borrowings.index'));
        }

        return view('borrowings.show')->with('borrowing', $borrowing);
    }

    /**
     * Show the form for editing the specified Borrowing.
     */
    public function edit($id)
    {
        $borrowing = $this->borrowingRepository->find($id);

        if (empty($borrowing)) {
            Flash::error('Borrowing not found');

            return redirect(route('borrowings.index'));
        }

        return view('borrowings.edit')->with('borrowing', $borrowing);
    }

    /**
     * Update the specified Borrowing in storage.
     */
    public function update($id, UpdateBorrowingRequest $request)
    {
        $borrowing = $this->borrowingRepository->find($id);

        if (empty($borrowing)) {
            Flash::error('Borrowing not found');

            return redirect(route('borrowings.index'));
        }

        $borrowing = $this->borrowingRepository->update($request->all(), $id);

        Flash::success('Borrowing updated successfully.');

        return redirect(route('borrowings.index'));
    }

    /**
     * Remove the specified Borrowing from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $borrowing = $this->borrowingRepository->find($id);

        if (empty($borrowing)) {
            Flash::error('Borrowing not found');

            return redirect(route('borrowings.index'));
        }

        $this->borrowingRepository->delete($id);

        Flash::success('Borrowing deleted successfully.');

        return redirect(route('borrowings.index'));
    }
}
