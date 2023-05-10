<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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


}
