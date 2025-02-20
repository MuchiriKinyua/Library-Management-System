<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResourceRequest;
use App\Http\Requests\UpdateResourceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ResourceRepository;
use Illuminate\Http\Request;
use Flash;

class ResourceController extends AppBaseController
{
    /** @var ResourceRepository $resourceRepository*/
    private $resourceRepository;

    public function __construct(ResourceRepository $resourceRepo)
    {
        $this->resourceRepository = $resourceRepo;
    }

    /**
     * Display a listing of the Resource.
     */
    public function index(Request $request)
    {
        $resources = $this->resourceRepository->paginate(10);

        return view('resources.index')
            ->with('resources', $resources);
    }

    /**
     * Show the form for creating a new Resource.
     */
    public function create()
    {
        return view('resources.create');
    }

    /**
     * Store a newly created Resource in storage.
     */
    public function store(CreateResourceRequest $request)
    {
        $input = $request->all();

        $resource = $this->resourceRepository->create($input);

        Flash::success('Resource saved successfully.');

        return redirect(route('resources.index'));
    }

    /**
     * Display the specified Resource.
     */
    public function show($id)
    {
        $resource = $this->resourceRepository->find($id);

        if (empty($resource)) {
            Flash::error('Resource not found');

            return redirect(route('resources.index'));
        }

        return view('resources.show')->with('resource', $resource);
    }

    /**
     * Show the form for editing the specified Resource.
     */
    public function edit($id)
    {
        $resource = $this->resourceRepository->find($id);

        if (empty($resource)) {
            Flash::error('Resource not found');

            return redirect(route('resources.index'));
        }

        return view('resources.edit')->with('resource', $resource);
    }

    /**
     * Update the specified Resource in storage.
     */
    public function update($id, UpdateResourceRequest $request)
    {
        $resource = $this->resourceRepository->find($id);

        if (empty($resource)) {
            Flash::error('Resource not found');

            return redirect(route('resources.index'));
        }

        $resource = $this->resourceRepository->update($request->all(), $id);

        Flash::success('Resource updated successfully.');

        return redirect(route('resources.index'));
    }

    /**
     * Remove the specified Resource from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resource = $this->resourceRepository->find($id);

        if (empty($resource)) {
            Flash::error('Resource not found');

            return redirect(route('resources.index'));
        }

        $this->resourceRepository->delete($id);

        Flash::success('Resource deleted successfully.');

        return redirect(route('resources.index'));
    }
}
