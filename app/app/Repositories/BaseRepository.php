<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }




    public function index(array $query = [])
    {
        $queryBuilder = $this->model->query();
        // Apply additional query logic if provided
        foreach ($query as $column => $value) {
            if ($column === 'search') {
                // Handle search condition separately
                $queryBuilder->where('comment', 'like', '%' . $value . '%');
            } else {
                $queryBuilder->where($column, $value);
            }
        }
        return $queryBuilder->paginate(3);
    }


    public function store(array $validatedData)
    {
        $this->model->create($validatedData);
    }

    public function edit($obj)
    {
        return $obj;
    }

    public function update(array $validatedData, Model $obj)
    {
        $obj->update($validatedData);
        return $obj;
    }

    public function destroy(Model $obj)
    {
        $obj->delete();
    }

}
