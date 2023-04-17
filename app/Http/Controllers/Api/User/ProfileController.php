<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreUsernameRequest;
use App\Http\Requests\Api\User\UploadPhotoRequest;
use App\Http\Requests\Api\User\UpdatePasswordRequest;
use App\Http\Requests\Api\Auth\CheckUsernameAvailabilityRequest;
use App\Http\Requests\Api\User\StoreQuestionnaireRequest;
use App\Models\Questionnaire;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    private $user, $questionnaire;
    public function __construct()
    {
        $this->user = new User();
        $this->questionnaire = new Questionnaire();
    }

    /**
     * @OA\Get(
     *      path="/api/user/profile/getUser",
     *      operationId="getUser",
     *      tags={"user,profile,getUser"},
     *      summary="user profile",
     *       security={
     *           {"bearerAuth": {}}
     *       },
     *      description="",
    *      @OA\Response(
    *          response=200,
    *          description="Successful operation",
    *       ),
    *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
    *      @OA\Response(
    *          response=403,
    *          description="Forbidden"
    *      )
    *     )
    */
    public function getUser(Request $request)
    {
        try {
            DB::beginTransaction();
            return successWithData(GENERAL_FETCHED_MESSAGE, $this->user->newQuery()->find(Auth::id()));
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/user/profile/updatePassword",
     *      operationId="updatePassword",
     *      tags={"user,profile,updatePassword"},
     *      summary="user profile",
     *      security={
     *           {"bearerAuth": {}}
     *       },
     *      description="",
    *       @OA\Parameter(
    *          name="old_password",
    *          description="Old Password",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
     *      @OA\Parameter(
    *          name="password",
    *          description="Password",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
     *      @OA\Parameter(
    *          name="password_confirmation",
    *          description="Password Confirmation",
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

    public function updatePassword(UpdatePasswordRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $user = $this->user->newQuery()->find(Auth::id());
            if (Hash::check($inputs['old_password'], $user->password)) {
                $user->password = Hash::make($inputs['password']);
                if ($user->save()) {
                    DB::commit();
                    return success(GENERAL_UPDATED_MESSAGE);
                }
            }
            DB::rollback();
            return error('Incorrect Password', ERROR_400);
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/user/profile/uploadPhoto",
     *      operationId="uploadPhoto",
     *      tags={"user,profile,uploadPhoto"},
     *      summary="user profile",
     *      security={
     *           {"bearerAuth": {}}
     *       },
     *      description="",
     *     @OA\RequestBody(
    *          required=true,
    *          @OA\MediaType(
    *              mediaType="multipart/form-data",
    *              @OA\Schema(
    *                  @OA\Property(
    *                      property="photo",
    *                      description="Photo",
    *                      type="file",
    *                      format="binary"
    *                   ),
    *               ),
    *           ),
    *       ),
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
    public function uploadPhoto(UploadPhotoRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $user = $this->user->newQuery()->whereId(Auth::id())->first();
            if (!uploadFile($inputs['photo'], $user, 'photo', 'user-photos')) {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, ERROR_400);
            }
            if(!$user->save())
            {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, ERROR_400);
            }
            DB::commit();
            return successWithData(GENERAL_FETCHED_MESSAGE, $user->fresh());
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/user/profile/storeQuestionnaire",
     *      operationId="storeQuestionnaire",
     *      tags={"user,profile,storeQuestionnaire"},
     *      summary="user profile",
     *      security={
     *           {"bearerAuth": {}}
     *       },
     *      description="",

    *       @OA\Parameter(
    *          name="questionnaire",
    *          description="Questionnaire",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="object"
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
    public function storeQuestionnaire(StoreQuestionnaireRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $user = Auth::user();
            foreach($inputs['questionnaire'] as $item)
            {
                $item['user_id'] = $user->id;
                if($this->questionnaire->newQuery()->whereUserId($user->id)->whereQuestionId($item['question_id'])->first())
                {
                    $ques = $this->questionnaire->newQuery()->whereUserId($user->id)->whereQuestionId($item['question_id'])->first();
                }else{
                    $ques = $this->questionnaire->newInstance();
                }
                $ques->fill($item);
                if(!$ques->save())
                {
                    DB::rollBack();
                    return error(GENERAL_ERROR_MESSAGE, ERROR_400);
                }
            }
            DB::commit();
            return success(GENERAL_SUCCESS_MESSAGE);
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }
}
