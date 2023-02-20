<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 05</title>
</head>

<body>

    <?php
    class Course
    {
        public $courseCode;
        public $courseName;
        public $courseDescription;
        public $grade;

        public function setCourseCode($courseCode)
        {
            $this->courseCode = $courseCode;
        }

        public function getCourseCode()
        {
            return $this->courseCode;
        }

        public function setCourseName($courseName)
        {
            $this->courseName = $courseName;
        }

        public function getCourseName()
        {
            return $this->courseName;
        }

        public function setCourseDescription($courseDescription)
        {
            $this->courseDescription = $courseDescription;
        }

        public function getCourseDescription()
        {
            return $this->courseDescription;
        }

        public function setGrade($grade)
        {
            $this->grade = $grade;
        }

        public function getGrade()
        {
            return $this->grade;
        }

        public function isA()
        {
            if ($this->grade == "A+") {
                return true;
            }

            return false;
        }
        public function courseDetails()
        {
            return "course code: " . $this->courseCode . " course name: " . $this->courseName . " course description: " . $this->courseDescription . " grade: " . $this->grade . ".";
        }
    }

    $course1 = new Course();
    $course1->setCourseCode("CIS 202");
    $course1->setCourseName("Data Structures");
    $course1->setCourseDescription("a computer since course used for orgnising data");
    $course1->setGrade("A+");

    $course2 = new Course();
    $course2->setCourseCode("CIS 304");
    $course2->setCourseName("Computer Architecture");
    $course2->setCourseDescription("the course talks about the architecture of computers");
    $course2->setGrade("A");

    $course3 = new Course();
    $course3->setCourseCode("CIS 381");
    $course3->setCourseName("Computer Ethics");
    $course3->setCourseDescription("a course related to ethics in SWE");
    $course3->setGrade("A");

    $courses = array($course1, $course2, $course3);

    echo "<table border='3'  style='background-color:blue;' >";
    echo "<tr>";
    echo "<th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th>";
    echo "</tr>";
    foreach ($courses as $course) {
        if ($course->isA()) {
            echo "<tr style='background-color: yellow'>";
        } else {

            echo "<tr>";
        }

        echo "<td>" . $course->getCourseCode() . "</td><td>" . $course->getCourseName() . "</td><td>" . $course->getCourseDescription() . "</td><td>" . $course->getGrade() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
