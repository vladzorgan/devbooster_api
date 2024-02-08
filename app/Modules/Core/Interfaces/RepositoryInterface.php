<?php

namespace App\Modules\Core\Interfaces;

interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id);

    /**
     * @param string $column
     * @param $value
     * @return mixed
     */
    public function findBy(string $column, $value);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param string $uuid
     * @param array $data
     * @return mixed
     */
    public function update(string $uuid, array $data);


    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function restore(int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function findByIdWithTrashed(int $id);
}
