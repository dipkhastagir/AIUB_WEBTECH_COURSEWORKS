<!DOCTYPE html>
<html>
        <head>
            <title>Student Profile & Status Checker</title>
        </head>
      
        <body>
            <h1>Student Profile and Status Checker</h1>
            <p>Console can show the student information</p>

            <script>
                console.log("STUDENT PROFILE");
                
                var studentName = "Dip";
                var studentAge = 22;
                var studentClass = "BSc in CSE 3rd year";
                var isStudent = true;

                console.log("Name:", studentName);
                console.log("Age:", studentAge);
                console.log("Class:", studentClass);
                console.log("Is Student?", isStudent);

  




                console.log("\nSUBJECT MARKS");

                var marks = [85, 72, 90, 60, 78];  
                var totalMarks = 0;

                for (var i = 0; i < marks.length; i++) 
                {
                  console.log("Subject " + (i + 1) + " Marks:", marks[i]);
                  totalMarks += marks[i];
                }

                var average = totalMarks / marks.length;

                console.log("Total Marks:", totalMarks);
                console.log("Average Marks:", average);






                console.log("\nSTATUS CHECK");

                if (studentAge >= 18) 
                {
                  console.log(studentName + " is an adult.");
                } 

                else 
                {
                  console.log(studentName + " is a minor.");
                }

                if (average >= 60) 
                {
                  console.log("Status: Passed");
                } 

                else 
                {
                  console.log("Status: Failed");
                }

  




                console.log("\nSUMMARY FUNCTION");

                function showSummary() 
                {
                    console.log("STUDENT SUMMARY");
                    console.log("Name:", studentName);
                    console.log("Age:", studentAge);
                    console.log("Average Marks:", average);
                    console.log("Result:", average >= 60 ? "Passed" : "Failed");
                }

                showSummary();

  




                function showPopupResult() 
                {
                    var resultText = "Student: " + studentName + "\n" +
                                          "Age: " + studentAge + "\n" +
                        "Average Marks: " + average.toFixed(2) + "\n" +
                    "Result: " + (average >= 60 ? "Passed" : "Failed");

                    alert(resultText);
                    
                    console.log("Result pop up displayed.");
                }

            </script>

            <br> 

            <button onclick="showPopupResult()">Student Result</button>

        </body>
</html>
