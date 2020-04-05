<?php

namespace App\Modules\Documents;

trait Uploadable
{

    public function documents()
    {
        return $this->morphMany(Document::class, 'model');
    }

    public function upload($request)
	{
	    if (count($request->all()) === 0) {
            return;
        }

        $files = $request->all()['files'];

        foreach ($files as $key => $file)
        {
            $document = Document::firstOrCreate(['sorting' => $key, 'model_type' => $this->getTable(), 'model_id' => $this->id]);
            $document->size      = $file->getClientSize();
            $document->extension = $file->guessExtension();
            $document->save();

            $file->move(storage_path('app/public/'.$this->getTable()), $document->id.'.'.$file->guessExtension());
        }
	}

    public function image()
    {
        if($this->documents->isEmpty()) {
            return '';
        }

        return asset('storage/'.$this->getTable().'/'.$this->documents[0]->id.'.'.$this->documents[0]->extension);
    }

    public function images($sorting = 1)
    {
       	--$sorting;

       	$array = [];

		foreach ($this->documents as $document) {
			$array[] = asset('storage/' . $this->getTable() . '/' . $document->id . '.' . $document->extension);
		}

		if (isset($array[$sorting])) {
            return $array[$sorting];
        }

	    return null;
    }
}