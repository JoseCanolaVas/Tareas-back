<?php

namespace App\Http\Modules\Bases;

use Illuminate\Database\Eloquent\Model;


class RepositoryBase
{
    protected $model;

    public function __construct(Model $model) {

        $this->model = $model;

    }

     /**
     * Listar
     *
     * @param  mixed $model
     * @return void
     */

    public function listados() {
        $orden = isset($data->orden) ? $data->orden : 'asc';
        $consulta = $this->model->orderBy('created_at', $orden);
        return $consulta->get();
    }

    public function buscar(int $id) {
        return $this->model->find($id);
    }

    /**php a
     * guardar
     *
     * @param  mixed $model
     * @return void
     */
    public function guardar(Model $model) {
        return $model->save();
    }


}
