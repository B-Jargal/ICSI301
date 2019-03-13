<?php
class SiSi{
    var $StudentArray;

    function generateStudents($numberToGenerate){

        $SampleCourse = new Course("Sample Course Name", "Sample Course index", "Sample Course credit");

        for($i = 0; $i <$numberToGenerate; $i++){

            array_push($this->StudentArray,
                        new Student(chr(96+26-$i)."name".(string)$i,
                        "namish".(string)$i, 
                        $i,
                        "Major".(string)$i, 
                        $SampleCourse));
            for($j = 0; $j < $i; $j++){
                $this->StudentArray[$i]->selectCourse($SampleCourse);
            }    
        }
    }

    function firstNameSort($student1,$student2){
        $name1 = $student1->getFirstName();
        $name2 = $student2->getFirstName();
 
        $firstHigher = 0;
        
        for($i =0; $i < min(strlen($name1),strlen($name2)); $i++){
           
            if($firstHigher == 0)
            {        
                 
                if(ord($name1[$i])<ord($name2[$i]))
                {
                    $firstHigher = -1;
                }
                elseif(ord($name1[$i])==ord($name2[$i]))
                {
                    $firstHigher = 0;
                }
                else
                {
                    $firstHigher=1;
                }

            }
            else{
                
                return $firstHigher;
            }
        }
        
        return $firstHigher;

    }

    function sortStudentsAlphabetical(){
        usort($this->StudentArray, array($this,"firstNameSort"));
    }

    function printStudents(){
        foreach($this->StudentArray as $key => $value)
        echo $this->StudentArray[$key]->toString()."<br>";
    } 
    function __construct(){
        $this->StudentArray = array();
    }
    function addStudent($Stud){
        array_push($this->StudentArray, $Stud);
    }
    function addStudentById($id,$selectedCourses){

    }
    function findStudent($name, $StudentArray){
        $resultStudents= array();
        foreach($StudentArray as $key => $value)
        {

            if(preg_match( ((string)("/".$name."/"))  ,   $StudentArray[$key]->getFirstName() ))
            {
                array_push($resultStudents  , $StudentArray[$key]);
            }

        }
        return $resultStudents;
    }
}
?>