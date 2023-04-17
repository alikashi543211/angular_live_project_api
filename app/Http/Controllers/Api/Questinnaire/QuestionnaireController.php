<?php

namespace App\Http\Controllers\Api\Questinnaire;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use App\Models\Section;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionnaireController extends Controller
{
    private $section, $question, $option;
    public function __construct()
    {
        $this->section = new Section();
        $this->question = new Question();
        $this->option = new Option();
    }

    /**
     * @OA\Post(
     *      path="/api/questionnaire/listing",
     *      operationId="QuestionnaireListing",
     *      tags={"questionnaire,listing"},
     *      summary="questionnaire",
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
    public function questionnaireListing(Request $request)
    {
        try {
            DB::beginTransaction();
            $inputs = $request->all();
            $data = $this->section->newQuery()
                ->with(['questions' => function($q){
                    $q->with(['options']);
                }])
                ->get();
            return successWithData(GENERAL_FETCHED_MESSAGE, $data);
        } catch (QueryException $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        } catch (Exception $e) {
            DB::rollBack();
            return error($e->getMessage(), ERROR_500);
        }
    }
}
