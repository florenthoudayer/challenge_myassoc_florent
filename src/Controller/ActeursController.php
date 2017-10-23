<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acteurs Controller
 *
 * @property \App\Model\Table\ActeursTable $Acteurs
 *
 * @method \App\Model\Entity\Acteur[] paginate($object = null, array $settings = [])
 */
class ActeursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $acteurs = $this->paginate($this->Acteurs);

        $this->set(compact('acteurs'));
        $this->set('_serialize', ['acteurs']);
    }

    /**
     * View method
     *
     * @param string|null $id Acteur id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acteur = $this->Acteurs->get($id, [
            'contain' => []
        ]);

        $this->set('acteur', $acteur);
        $this->set('_serialize', ['acteur']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acteur = $this->Acteurs->newEntity();
        if ($this->request->is('post')) {
            $acteur = $this->Acteurs->patchEntity($acteur, $this->request->getData());
            if ($this->Acteurs->save($acteur)) {
                $this->Flash->success(__('The acteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acteur could not be saved. Please, try again.'));
        }
        $this->set(compact('acteur'));
        $this->set('_serialize', ['acteur']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acteur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acteur = $this->Acteurs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acteur = $this->Acteurs->patchEntity($acteur, $this->request->getData());
            if ($this->Acteurs->save($acteur)) {
                $this->Flash->success(__('The acteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acteur could not be saved. Please, try again.'));
        }
        $this->set(compact('acteur'));
        $this->set('_serialize', ['acteur']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acteur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acteur = $this->Acteurs->get($id);
        if ($this->Acteurs->delete($acteur)) {
            $this->Flash->success(__('The acteur has been deleted.'));
        } else {
            $this->Flash->error(__('The acteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
