<?php

namespace App\Repositories\Question;

interface QuestionInterface
{
    public function deleteBySurveyId($surveyId);

    public function delete($ids);
}