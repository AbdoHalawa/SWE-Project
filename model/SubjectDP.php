<?php
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');

abstract class SubjectDP extends Model
{
    abstract public function deleteSubject($subjectId);
    abstract public function getSubjectInfo($subjectId);
    abstract public function addSubject(): bool;
    abstract public function getSubjects();
}
