<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios'],
        ];
        $enderecos = $this->paginate($this->Enderecos);

        $this->set(compact('enderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Usuarios'],
        ]);

        $this->set(compact('endereco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEmptyEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $usuarios = $this->Enderecos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
        }
        $usuarios = $this->Enderecos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('The endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The endereco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
