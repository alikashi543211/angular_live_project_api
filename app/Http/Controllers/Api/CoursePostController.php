<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CoursePost\DeleteRequest;
use App\Http\Requests\Api\CoursePost\DetailRequest;
use App\Http\Requests\Api\CoursePost\StoreRequest;
use App\Http\Requests\Api\CoursePost\UpdateRequest;
use App\Models\CoursePost;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursePostController extends Controller
{
    private $coursePost;
    public function __construct()
    {
        $this->coursePost = new CoursePost();
    }

    /**
     * @OA\Post(
     *      path="/api/coursePost/coursePostListing",
     *      operationId="coursePostListing",
     *      tags={"coursePost,coursePostListing"},
     *      summary="coursePost",
     *      description="",
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

    public function coursePostListing(Request $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $coursePostListing = $this->coursePost->newQuery()->orderBy('id', 'DESC')->get();
            DB::commit();
            return successWithData(GENERAL_FETCHED_MESSAGE, $coursePostListing);

        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        }
    }
    /**
     * @OA\Post(
     *      path="/api/coursePost/coursePostDetail",
     *      operationId="coursePostDetail",
     *      tags={"coursePost,coursePostDetail"},
     *      summary="coursePost",
     *      description="",
    *      @OA\Parameter(
    *          name="course_post_id",
    *          description="course_post_id",
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
    public function coursePostDetail(DetailRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $coursePost = $this->coursePost->newQuery()->whereId($inputs['course_post_id'])->first();
            DB::commit();
            return successWithData(GENERAL_FETCHED_MESSAGE, $coursePost);
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        }
    }
    /**
     * @OA\Post(
     *      path="/api/coursePost/coursePostStore",
     *      operationId="coursePostStore",
     *      tags={"coursePost,coursePostStore"},
     *      summary="coursePost",
     *      description="",
    *      @OA\Parameter(
    *          name="title",
    *          description="title",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    * @OA\RequestBody(
    *         required=false,
    *         @OA\MediaType(
    *             mediaType="multipart/form-data",
    *             @OA\Schema(
    *                 @OA\Property(
    *                     description="image to upload",
    *                     property="image",
    *                     type="file",
    *                ),
    *                 required={"image"}
    *             )
    *         )
    *     ),
    *      @OA\Parameter(
    *          name="short_desc",
    *          description="short_desc",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="full_desc",
    *          description="full_desc",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="author",
    *          description="author",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="is_active",
    *          description="is_active",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="integer"
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

    public function coursePostStore(StoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $coursePost = $this->coursePost->newInstance();
            $coursePost->fill($inputs);
            $coursePost->entered_date = Carbon::now();
            if($request->hasFile('image'))
            {
                $this->uploadFile(request('image'), $coursePost, 'image', false, 'course-post-images');
            }
            if(!$coursePost->save())
            {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, SUCCESS_200);
            }
            DB::commit();
            return successWithData(GENERAL_SUCCESS_MESSAGE, $coursePost->fresh());

        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        }
    }
    /**
     * @OA\Post(
     *      path="/api/coursePost/coursePostUpdate",
     *      operationId="coursePostUpdate",
     *      tags={"coursePost,coursePostUpdate"},
     *      summary="coursePost",
     *      description="",
    *      @OA\Parameter(
    *          name="course_post_id",
    *          description="course_post_id",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="title",
    *          description="title",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *     @OA\RequestBody(
    *         required=false,
    *         @OA\MediaType(
    *             mediaType="multipart/form-data",
    *             @OA\Schema(
    *                 @OA\Property(
    *                     description="image to upload",
    *                     property="image",
    *                     type="file",
    *                ),
    *             )
    *         )
    *     ),
    *      @OA\Parameter(
    *          name="short_desc",
    *          description="short_desc",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="full_desc",
    *          description="full_desc",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="author",
    *          description="author",
    *          required=true,
    *           in="query",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *      @OA\Parameter(
    *          name="is_active",
    *          description="is_active",
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

    public function coursePostUpdate(UpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $coursePost = $this->coursePost->newQuery()->whereId($inputs['course_post_id'])->first();
            $coursePost->fill($inputs);
            if($request->hasFile('image'))
            {
                $this->deleteFile($coursePost->getRawOriginal('image'));
                $this->uploadFile(request('image'), $coursePost, 'image', false, 'course-post-images');
            }
            if(!$coursePost->save())
            {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, SUCCESS_200);
            }
            DB::commit();
            return successWithData(GENERAL_SUCCESS_MESSAGE, $coursePost->fresh());

        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        }
    }
    /**
     * @OA\Post(
     *      path="/api/coursePost/coursePostDelete",
     *      operationId="coursePostDelete",
     *      tags={"coursePost,coursePostDelete"},
     *      summary="coursePost",
     *      description="",
    *      @OA\Parameter(
    *          name="course_post_id",
    *          description="course_post_id",
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

    public function coursePostDelete(DeleteRequest $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $coursePost = $this->coursePost->newQuery()->whereId($inputs['course_post_id'])->first();
            if($coursePost->getRawOriginal('image'))
            {
                $this->deleteFile($coursePost->getRawOriginal('image'));
            }
            if(!$coursePost->delete())
            {
                DB::rollBack();
                return error(GENERAL_ERROR_MESSAGE, SUCCESS_200);
            }
            DB::commit();
            return success(GENERAL_DELETED_MESSAGE);

        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), SUCCESS_200);
        }
    }
}
