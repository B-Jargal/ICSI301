<?php
    class Student{
        var $firstName;
        var $lastName;
        var $id;
        var $major;
        var $selectedCourses;

        function __construct($_firstName,$_lastName,$_id,$_major,$_selectedCourses){
            $this->firstName = $_firstName;
            $this->lastName = $_lastName;
            $this->id = $_id;
            $this->major = $_major;
            $this->selectedCourses = array();
            array_push($this->selectedCourses,$_selectedCourses);
        }
        function setFirstName($_firstName){
            $this->firstName = $_firstName;
        }
        
        function getFirstName(){
            return $this->firstName;
        }

        function setLastName($_lastName){
            $this->lastName = $_lastName;
        }
        
        function getLastName(){
            return $this->lastName;
        }

        function setId($_id){
            $this->id = $_id;
        }
        
        function getId(){
            return $this->id;
        }

        function setMajor($_major){
            $this->major = $_major;
        }
        
        function getMajor(){
            return $this->major;
        }

        function setSelectedCourses($_selectedCourses){
            $this->selectedCourses = $_selectedCourses;
        }
        
        function getSelectedCourses(){
            return $this->selectedCourses;
        }

        function selectCourse($course_1){
           array_push($this->selectedCourses,$course_1);
        }
        function unSelectCourse($course_1){
            $theCourseId = $this->findCourseId($course_1);
            $this->selectedCourses[$theCourseId] = null;
            $this->deleteElement();

        }
        private function deleteElement(){
            foreach($this->selectedCourses as $key => $value)          
                if(empty($value)) 
                    unset($this->selectedCourses[$key]);  
        }
        private function findCourseId($course_1){
            for($i = 0; $i < count(selectedCourses); $i++){
                if(selectedCourses[$i]->getIndex() == $course_1->getIndex()){
                    return $i;
                }
            }
            return -1;
        }
        function toString(){

            $courseString = "";
            
                foreach($this->selectedCourses as $key => $value){
                    if($this->selectedCourses[$key]!=null){
                    $courseString .= $this->selectedCourses[$key]->toString();
                    $courseString .= ", <br>";             
                    }       
                }      
            
         
            return (string)((string)$this->getFirstName().", <br>".(string)$this->getLastName().", <br>".(string)$this->getId().", <br> ".(string)$this->getMajor().", <br>".$courseString);
        }
    }

?>
