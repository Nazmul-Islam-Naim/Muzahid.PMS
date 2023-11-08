<?php

namespace App\Traits;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;


trait FileUploadTrait
{

    public function storeFile($data, $folder){

        if(Arr::has($data, 'doc')){
            $data['doc'] = (Arr::pull($data, 'doc'));
            $data['doc'] = (Arr::pull($data, 'doc'))->store($folder);
        }

        return $data;
    }

    public function updateFile($object, $data, $folder){

        if(Arr::has($data, 'doc')){

            if (($object->doc != null) || ($object->doc != '')) {
                if (Storage::exists($object->doc)) {
                    Storage::delete($object->doc);
                }
            }

            $data['doc'] = (Arr::pull($data, 'doc'));
            $data['doc'] = (Arr::pull($data, 'doc'))->store($folder);
        }

        return $data;

    }

    public function destroyFile($object):void{
        if(Arr::has($object, 'doc')){

            if (Storage::exists($object->doc)) {
                Storage::delete($object->doc);
            }
        }
    }
}
