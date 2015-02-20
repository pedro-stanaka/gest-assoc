<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modalities Controller
 *
 * @property \App\Model\Table\ModalitiesTable $Modalities
 */
class ModalitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('modalities', $this->paginate($this->Modalities));
        $this->set('_serialize', ['modalities']);
    }

    /**
     * View method
     *
     * @param string|null $id Modality id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modality = $this->Modalities->get($id, [
            'contain' => ['Members', 'MembersModalities']
        ]);
        $this->set('modality', $modality);
        $this->set('_serialize', ['modality']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modality = $this->Modalities->newEntity();
        if ($this->request->is('post')) {
            $modality = $this->Modalities->patchEntity($modality, $this->request->data);
            if ($this->Modalities->save($modality)) {
                $this->Flash->success('The modality has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The modality could not be saved. Please, try again.');
            }
        }
        $members = $this->Modalities->Members->find('list', ['limit' => 200]);
        $this->set(compact('modality', 'members'));
        $this->set('_serialize', ['modality']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modality id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modality = $this->Modalities->get($id, [
            'contain' => ['Members']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modality = $this->Modalities->patchEntity($modality, $this->request->data);
            if ($this->Modalities->save($modality)) {
                $this->Flash->success('The modality has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The modality could not be saved. Please, try again.');
            }
        }
        $members = $this->Modalities->Members->find('list', ['limit' => 200]);
        $this->set(compact('modality', 'members'));
        $this->set('_serialize', ['modality']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modality id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modality = $this->Modalities->get($id);
        if ($this->Modalities->delete($modality)) {
            $this->Flash->success('The modality has been deleted.');
        } else {
            $this->Flash->error('The modality could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
