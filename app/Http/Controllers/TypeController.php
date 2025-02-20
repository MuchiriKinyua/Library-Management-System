<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use Flash;

class TypeController extends AppBaseController
{
    /** @var TypeRepository $typeRepository*/
    private $typeRepository;

    public function __construct(TypeRepository $typeRepo)
    {
        $this->typeRepository = $typeRepo;
    }

    /**
     * Display a listing of the Type.
     */
    public function index(Request $request)
    {
        $types = $this->typeRepository->paginate(10);

        return view('types.index')
            ->with('types', $types);
    }

    /**
     * Show the form for creating a new Type.
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created Type in storage.
     */
    public function store(CreateTypeRequest $request)
    {
        $input = $request->all();

        $type = $this->typeRepository->create($input);

        Flash::success('Type saved successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Display the specified Type.
     */
    public function show($id)
    {
        $type = $this->typeRepository->find($id);

        if (empty($type)) {
            Flash::error('Type not found');

            return redirect(route('types.index'));
        }

        return view('types.show')->with('type', $type);
    }

    /**
     * Show the form for editing the specified Type.
     */
    public function edit($id)
    {
        $type = $this->typeRepository->find($id);

        if (empty($type)) {
            Flash::error('Type not found');

            return redirect(route('types.index'));
        }

        return view('types.edit')->with('type', $type);
    }

    /**
     * Update the specified Type in storage.
     */
    public function update($id, UpdateTypeRequest $request)
    {
        $type = $this->typeRepository->find($id);

        if (empty($type)) {
            Flash::error('Type not found');

            return redirect(route('types.index'));
        }

        $type = $this->typeRepository->update($request->all(), $id);

        Flash::success('Type updated successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Remove the specified Type from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $type = $this->typeRepository->find($id);

        if (empty($type)) {
            Flash::error('Type not found');

            return redirect(route('types.index'));
        }

        $this->typeRepository->delete($id);

        Flash::success('Type deleted successfully.');

        return redirect(route('types.index'));
    }
}
