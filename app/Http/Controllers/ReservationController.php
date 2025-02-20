<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ReservationRepository;
use Illuminate\Http\Request;
use Flash;

class ReservationController extends AppBaseController
{
    /** @var ReservationRepository $reservationRepository*/
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepo)
    {
        $this->reservationRepository = $reservationRepo;
    }

    /**
     * Display a listing of the Reservation.
     */
    public function index(Request $request)
    {
        $reservations = $this->reservationRepository->paginate(10);

        return view('reservations.index')
            ->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new Reservation.
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created Reservation in storage.
     */
    public function store(CreateReservationRequest $request)
    {
        $input = $request->all();

        $reservation = $this->reservationRepository->create($input);

        Flash::success('Reservation saved successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified Reservation.
     */
    public function show($id)
    {
        $reservation = $this->reservationRepository->find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.show')->with('reservation', $reservation);
    }

    /**
     * Show the form for editing the specified Reservation.
     */
    public function edit($id)
    {
        $reservation = $this->reservationRepository->find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.edit')->with('reservation', $reservation);
    }

    /**
     * Update the specified Reservation in storage.
     */
    public function update($id, UpdateReservationRequest $request)
    {
        $reservation = $this->reservationRepository->find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        $reservation = $this->reservationRepository->update($request->all(), $id);

        Flash::success('Reservation updated successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Remove the specified Reservation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reservation = $this->reservationRepository->find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        $this->reservationRepository->delete($id);

        Flash::success('Reservation deleted successfully.');

        return redirect(route('reservations.index'));
    }
}
