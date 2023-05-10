<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\EmployeeMaster\StoreRequest;
use App\Models\EmployeeMaster;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeMasterController extends Controller
{
    private $empMaster;
    public function __construct()
    {
        $this->empMaster = new EmployeeMaster();
    }

    /**
     * @OA\Post(
     *      path="/api/employeeMaster/employeeMasterStore",
     *      operationId="employeeMasterStore",
     *      tags={"employeeMaster,employeeMasterStore"},
     *      summary="employeeMaster",
     *      description="",
    *      @OA\Parameter(
    *          name="first_name",
    *          description="first_name",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="last_name",
    *          description="last_name",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="email",
    *          description="email",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="password",
    *          description="password",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Response(
    *          response=200,
    *          description="Successful operation",
    *       ),
    *      @OA\Response(
    *          response=403,
    *          description="Forbidden"
    *      )
    *     )
    */

    public function employeeMasterStore(StoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $empMaster = $this->empMaster->newInstance();
            $empMaster->first_name = $inputs['first_name'];
            $empMaster->last_name = $inputs['last_name'];
            $empMaster->email = $inputs['email'];
            $empMaster->entered_date = Carbon::now();
            $empMaster->password = $inputs['password'];
            if(!$empMaster->save())
            {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, ERROR_500);
            }
            DB::commit();
            return successWithData(GENERAL_SUCCESS_MESSAGE, $empMaster->fresh());

        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }
}
