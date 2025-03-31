<?php

namespace App\Observers;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Model;

class ModelActivityObserver
{
    /**
     * Handle the Model "created" event.
     */
    public function created(Model $model): void
    {
        ActivityLog::create([
            'model'    => get_class($model),
            'model_id' => $model->id,
            'action'   => 'created',
            'changes'  => json_encode($model->toArray()),
        ]);
    }

    /**
     * Handle the Model "updated" event.
     */
    public function updated(Model $model): void
    {
        ActivityLog::create([
            'model'    => get_class($model),
            'model_id' => $model->id,
            'action'   => 'updated',
            'changes'  => json_encode([
                'old' => $model->getOriginal(),
                'new' => $model->getChanges(),
            ]),
        ]);
    }

    /**
     * Handle the Model "deleted" event.
     */
    public function deleted(Model $model): void
    {
        ActivityLog::create([
            'model'    => get_class($model),
            'model_id' => $model->id,
            'action'   => 'deleted',
            'changes'  => json_encode($model->toArray()),
        ]);
    }

    /**
     * Handle the Model "restored" event.
     */
    public function restored(Model $model): void
    {
        //
    }

    /**
     * Handle the Model "force deleted" event.
     */
    public function forceDeleted(Model $model): void
    {
        //
    }
}
