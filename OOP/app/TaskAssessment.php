<?php

namespace App;
class TaskAssessment
{
    static public function getAssessmentFromDeveloper(string $progLanguage): int
    {
        switch ($progLanguage) {
            case "php":
                $PHPDeveloper = new PhpDeveloper('Alena', 25, 'Middle');
                return $PHPDeveloper->getEvaluateTask();
            case "java":
                $javaDeveloper = new JavaDeveloper('Dima', 27, 'TeamLead');
                return $javaDeveloper->getEvaluateTask();
                break;
            case "javascript":
                $JSDeveloper = new JSDeveloper();
                $JSDeveloper->setName('Inna');
                $JSDeveloper->setAge(33);
                $JSDeveloper->setPosition('Junior');
                return $JSDeveloper->getEvaluateTask();
            case "python":
                $pythonDeveloper = new PythonDeveloper();
                $pythonDeveloper->setName('Marina');
                $pythonDeveloper->setAge(37);
                $pythonDeveloper->setPosition('TeamLead');
                return $pythonDeveloper->getEvaluateTask();
            default:
                return 0;
        }
    }

    public static function getGenerateFinalGrade(string $progLanguage): int
    {
        $projectManager = new PM();
        return $projectManager->getEvaluateTaskPM (self::getAssessmentFromDeveloper($progLanguage));
    }
}


