<?php

namespace App\Http\Controllers;

use App\DataTables\SessionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Repositories\SessionRepository;

class SessionController extends AppBaseController
{
    /** @var  SessionRepository */
    private $sessionRepository;

    public function __construct(SessionRepository $sessionRepo)
    {
        $this->sessionRepository = $sessionRepo;
    }

    /**
     * Display a listing of the Session.
     *
     * @param SessionDataTable $sessionDataTable
     * @return Response
     */
    public function index(SessionDataTable $sessionDataTable)
    {

        return $sessionDataTable->render('sessions.index');
    }

    /**
     * Show the form for creating a new Session.
     *
     * @return Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created Session in storage.
     *
     * @param CreateSessionRequest $request
     *
     * @return Response
     */
    public function store(CreateSessionRequest $request)
    {
        $input = $request->all();

        $session = $this->sessionRepository->create($input);

        Flash::success('Session saved successfully.');

        return redirect(route('sessions.index'));
    }

    /**
     * Display the specified Session.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        return view('sessions.show')->with('session', $session);
    }

    /**
     * Show the form for editing the specified Session.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        return view('sessions.edit')->with('session', $session);
    }

    /**
     * Update the specified Session in storage.
     *
     * @param  int              $id
     * @param UpdateSessionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSessionRequest $request)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        $session = $this->sessionRepository->update($request->all(), $id);

        Flash::success('Session updated successfully.');

        return redirect(route('sessions.index'));
    }

    /**
     * Remove the specified Session from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        $this->sessionRepository->delete($id);

        Flash::success('Session deleted successfully.');

        return redirect(route('sessions.index'));
    }
}
