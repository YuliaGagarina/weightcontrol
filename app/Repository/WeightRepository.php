<?php
namespace App\Repository;

use \App\Weight;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

class WeightRepository implements WeightRepositoryInterface
{
    //TODO  Это здесь не нужно, ибо при каждом вызове будет чиститься БД
    //use RefreshDatabase;

    /**
     * @var Weight

     */
    private $model;

    public function __construct()
    {
        $this->model = app(Weight::class);
    }

    /**
     * TODO Логика работы в корне не верна в это месте
     * TODO пускай возвращает тип int (ID вставленной записи
     *
     * @param array $data
     * @return int
     */
    public function addWeight(array $data): int
    {
        //TODO Просто сохраняй данные здесь и все

        // TODO поскольку у тебя уже есть модель, фасад для создания записи можешь не использовать
        $this->model->fill($data)->save();
        return $this->model->id;
    }
    public function findWeightId(int $id): Weight
    {
        $weightId = Weight::findOrFail($id);
        
         return $weightId;
    }
    public function updateWeightId(int $id): \App\Weight
    {
         $weightId = \App\Weight::findOrFail($id);
        
            return $weightId;
    }
    public function deleteWeightId(int $id): \App\Weight
    {
         $weight= \App\Weight::findOrFail($id);
         return $weight;
    }
}
   
