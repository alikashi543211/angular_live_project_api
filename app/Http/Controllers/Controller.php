<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="AngularLiveProject API Documentation",
 *      description="",
 *      @OA\Contact(
 *          email="admin@admin.com"
 *      ),
 * )
 * @OA\SecurityScheme(
 *    securityScheme="bearerAuth",
 *    in="header",
 *    name="bearerAuth",
 *    type="http",
 *    scheme="bearer",
 *    bearerFormat="JWT",
 *  ),
 *
 * @OA\Server(
 *      url="http://angular_live_project_api.test/",
 *      description="Local API Server"
 * )
 * @OA\Server(
 *      url="http://192.168.0.150:8008/",
 *      description="Local API Server Using IP"
 * )
*
* @OA\Tag(
*     name="Projects",
*     description="API Endpoints of Projects"
* )
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function uploadFile($file, $model, $column, $v4 = false, $folderTitle = 'device-configurations' )
    {
        $type = $v4 ? '-v4' : '';
        $folderName = $folderTitle . $type;
        // make file path structure
        $filePath = $folderName . '/' . date('Y') . '/' . date('m') . '/';
        //Set public folder path
        //renaming the file
        $name = $column . '_' . time() . '_' . rand(5000, 100000) . "." . $file->getClientOriginalExtension();
        if (env('AWS_ENV')) {
            Storage::disk('s3')->putFileAs($filePath, $file, $name);
        } else {
            $folderPath = public_path('/') . $filePath;
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            if (!$file->move($folderPath, $name)) {
                return false;
            }
        }
        $model->{$column} = $filePath . $name;
        return true;
    }

    protected function deleteFile($file)
    {

        if (env('AWS_ENV')) {
            if (Storage::disk('s3')->delete($file)) {
                return true;
            } else return false;
        } else {
            if(File::exists($file))
            {
                File::delete($file);
                return true;
            }else
            {
                return false;
            }

        }
    }

}
