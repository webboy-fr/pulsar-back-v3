<?php

namespace App\Controllers;
use App\Models\MemberModel;
use CodeIgniter\API\ResponseTrait;

class Member extends BaseController {

    use ResponseTrait;

    protected $modelName = 'App\Models\MemberModel';
    protected $format    = 'json'; //Permet de définir automatiquement le MIME type retourné

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index() {
        $memberModel = new MemberModel();
        $members     = $memberModel->findAll();

        return $this->respond($members);

    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null) {
        $memberModel = new MemberModel();
        $member      = $memberModel->find($id);

        return $this->respond($member);
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new () {
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create() {
        $memberModel = new MemberModel();
        $members     = $memberModel->insert($this->request->getPost());

        return $this->respondCreated($members);
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null) {
        //
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null) {
        $memberModel = new MemberModel();
        $member      = $memberModel->update($id, $this->request->getPut());
        //$member = $memberModel->update($id, ['instrument' => 'guitare']);

        return $this->respondUpdated($member);
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null) {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null) {
        //
    }
}
