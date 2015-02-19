<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Members Controller
 *
 * @property \App\Model\Table\MembersTable $Members
 */
class MembersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People']
        ];
        $this->set('members', $this->paginate($this->Members));
    }

    /**
     * View method
     *
     * @param string|null $id Member id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function view($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => ['People']
        ]);
        $this->set('member', $member);
    }

    /**
     * Add method
     *
     * @return void
     */
    public function add()
    {
        $member = $this->Members->newEntity(null, ['validate'=>false]);
        if ($this->request->is('post')) {
            $member = $this->Members->patchEntity($member, $this->request->data);
            if ($this->Members->save($member)) {
                $this->Flash->success('The member has been saved.');
                $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The member could not be saved. Please, try again.');
            }
        }
        $people = $this->Members->People->find('list', ['limit' => 200]);
        $this->set(compact('member', 'people'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Member id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function edit($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $member = $this->Members->patchEntity($member, $this->request->data);
            if ($this->Members->save($member)) {
                $this->Flash->success('The member has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The member could not be saved. Please, try again.');
            }
        }
        $this->set(compact('member'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Member id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $member = $this->Members->get($id);
        if ($this->Members->delete($member)) {
            $this->Flash->success('The member has been deleted.');
        } else {
            $this->Flash->error('The member could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
