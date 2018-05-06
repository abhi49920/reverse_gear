<?php
session_start();
$_SESSION['cname']=$_POST['cname'];
$_SESSION['branch']=$_POST['branch'];
?>
<!DOCTYPE html>
<!--
Author : Optimist Society
Designed and Edited By: Abhishek kumar
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
        <script type='text/javascript'>
        window.onload = function() {
           var x = 1800;
           var y = document.getElementById("timer");
               // Display count down for 20s
              setInterval(function() {
              if (x <= 1801 && x >= 1) {
                 x--;
                 y.innerHTML = '' + x + '';
                   if (x===1) {
                   x = 1801;
                   }
                  }
                 }, 1000);
                // Form Submitting after 20s
           var auto_refresh = setInterval(function() {
           submitform();
           }, 1800000);
          // Form submit function
        function submitform() {
            alert("Time Up")
     document.getElementById("form").submit();
}
        };
        </script>
        </script>
        <title>Reverse Gear</title>
    </head>
    <body>
        <div class="container-fluid" style="background: rgb(0, 0, 0);">
            <center><h1 class="display-4"><font face="Pasajero" color="white">REVERSE GEAR</font></h1></center>
        </div>
        <br/>
     <br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Each Question is of 1 point each.
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Quiz will end in : <b id="timer">1800</b> <b>seconds</b>.</span>
     <br/>
     <br/>
     <br/>
     <div class="container border border-dark" style="padding-top: 20px; padding-bottom: 50px;">
            <form action="result.php" id="form" method="post">
                <div class="container">
                    <!-- Question1 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 1: In C, if you pass an array as an argument to a function, what actually gets passed?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an1" id="rd">Value of elements in array
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an1" id="rd">First element of the array
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an1" id="rd">Base address of the array
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an1" id="rd">Address of the last element of array
                              </label>
                            </div>
                    </div>
                    <!-- Question2 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 2: What are the types of linkages?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an2" id="rd1">Internal and External
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an2" id="rd1">External, Internal and None
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an2" id="rd1">External and None
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an2" id="rd1">Internal
                              </label>
                            </div>
                    </div>
                    <!-- Question3 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 3: Which of the following special symbol allowed in a variable name?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an3" id="rd2">* (asterisk)
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an3" id="rd2">| (pipeline)
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an3" id="rd2">- (hyphen)
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an3" id="rd2">_ (underscore)
                              </label>
                            </div>
                    </div>
                    <!-- Question4 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 4: Is there any difference between following declarations?</h3>
                        <xmp>
                            1 :	extern int fun();
                            2 :	int fun();
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an4" id="rd3">Both are identical
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an4" id="rd3">No difference, except extern int fun(); is probably in another file
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an4" id="rd3">int fun(); is overrided with extern int fun();
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an4" id="rd3">None of these
                              </label>
                            </div>
                    </div>
                    <!-- Question5 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 5: How would you round off a value from 1.66 to 2.0?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="10" name="an5" id="rd4">ceil(1.66)
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an5" id="rd4">floor(1.66)
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an5" id="rd4">roundup(1.66)
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an5" id="rd4">roundto(1.66)
                              </label>
                            </div>
                    </div>
                    <!-- Question6 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 6: What are the different types of real data type in C ?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an6" id="rd5">float, double
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an6" id="rd5">short int, double, long int
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an6" id="rd5">float, double, long double
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an6" id="rd5">double, long int, float
                              </label>
                            </div>
                    </div>
                    <!-- Question7 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 7: What will you do to treat the constant 3.14 as a <xmp>long double?</xmp></h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an7" id="rd6">use 3.14LD
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an7" id="rd6">use 3.14L
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an7" id="r6">use 3.14DL
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an7" id="rd6">use 3.14LF
                              </label>
                            </div>
                    </div>
                    <!-- Question8 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 8: If the binary eauivalent of 5.375 in normalised form is 0100 0000 1010 1100 0000 0000 0000 0000, what will be the output of the program (on intel machine)?</xmp></h3>
                        <xmp>
                          #include<stdio.h>
                          #include<math.h>
                          int main()
                          {
                            float a=5.375;
                            char *p;
                            int i;
                            p = (char*)&a;
                            for(i=0; i<=3; i++)
                            printf("%02x\n", (unsigned char)p[i]);
                            return 0;
                           }
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an8" id="rd7">40 AC 00 00
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an8" id="rd7">04 CA 00 00
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an8" id="rd7">00 00 AC 40
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an8" id="rd7">00 00 CA 04
                              </label>
                            </div>
                    </div>
                    <!-- Question9 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 9: Which of the following range is a valid long double (Turbo C in 16 bit DOS OS) ?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an9" id="rd8"><xmp>3.4E<sup>-4932</sup> to 1.1E<sup>+4932</sup></xmp>
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an9" id="rd8"><xmp>  3.4E<sup>-4932</sup> to 3.4E<sup>+4932</sup></xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an9" id="rd8"><xmp>  1.1E<sup>-4932</sup> to 1.1E<sup>+4932</sup></xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an9" id="rd8"><xmp>  1.7E<sup>-4932</sup> to 1.7E<sup>+4932</sup></xmp>
                              </label>
                            </div>
                    </div>
                    <!-- Question10 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 10: Which statement will you add in the following program to work it correctly?</h3>
                        <xmp>
                            #include<stdio.h>
                        int main()
                        {
                        printf("%f\n", log(36.0));
                        return 0;
                        }
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an10" id="rd9"><xmp>#include<conio.h></xmp>
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an10" id="rd9"><xmp>#include<math.h></xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an10" id="rd9"><xmp>#include<stdlib.h></xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an10" id="rd9"><xmp>#include<stdlib.h></xmp>
                              </label>
                            </div>
                    </div>
                    <!-- Question11 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 11: What is (void*)0?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an11" id="rd10">Representation of NULL pointer
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an11" id="rd10">Representation of void pointer
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an11" id="rd10">Error
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an11" id="rd10">None of above
                              </label>
                            </div>
                    </div>
                    <!-- Question12 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 12: Can you combine the following two statements into one?</h3>
                        <xmp>
                            char *p;
                            p = (char*) malloc(100);
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an12" id="rd11">char p = *malloc(100);
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an12" id="rd11">char *p = (char) malloc(100);
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an12" id="rd11">char *p = (char*)malloc(100);
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an12" id="rd11">char *p = (char *)(malloc*)(100);
                              </label>
                            </div>
                    </div>
                    <!-- Question13 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 13: In which header file is the NULL macro defined?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an13" id="rd12">stdio.h
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an13" id="rd12">stddef.h
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an13" id="rd12">stdio.h and stddef.h
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an13" id="rd12">math.h
                              </label>
                            </div>
                    </div>
                    <!-- Question14 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 14: How many bytes are occupied by near, far and huge pointers (DOS)?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an14" id="rd13">near=2 far=4 huge=4
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an14" id="rd13">near=4 far=8 huge=8
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an14" id="rd13">near=2 far=4 huge=8
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an14" id="rd13">near=4 far=4 huge=8
                              </label>
                            </div>
                    </div>
                    <!-- Question15 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 15: If a variable is a pointer to a structure, then which of the following operator is used to access data members of the structure through the pointer variable?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an15" id="rd14">.
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an15" id="rd14">&
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an15" id="rd14">*
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an15" id="rd14">->
                              </label>
                            </div>
                    </div>
                    <!-- Question16 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 16: What will the SWAP macro in the following program be expanded to on preprocessing? will the code compile?</h3>
                        <xmp>
                            #include<stdio.h>
                            #define SWAP(a, b, c)(c t; t=a, a=b, b=t)
                            int main()
                            {
                             int x=10, y=20;
                             SWAP(x, y, int);
                             printf("%d %d\n", x, y);
                             return 0;
                            }
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an16" id="rd15">It compiles
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an16" id="rd15">Compiles with an warning
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an16" id="rd15">Not compile
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an16" id="rd15">Compiles and print nothing
                              </label>
                            </div>
                    </div>
                    <!-- Question17 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 17: In which stage the following code " #include<stdio.h> " gets replaced by the contents of the file stdio.h</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an17" id="rd16">During editing
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an17" id="rd16">During linking
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an17" id="rd16">During execution
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an17" id="rd16">During preprocessing
                              </label>
                            </div>
                    </div>
                    <!-- Question18 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 18: The maximum combined length of the command-line arguments including the spaces between adjacent arguments is</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an18" id="rd17">128 characters
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an18" id="rd17">256 characters
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an18" id="rd17">67 characters
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an18" id="rd17">It may vary from one operating system to another
                              </label>
                            </div>
                    </div>
                    <!-- Question19 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 19: According to ANSI specifications which is the correct way of declaring main when it receives command-line arguments?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an19" id="rd18"><xmp>int main(int argc, char *argv[])</xmp>
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an19" id="rd18"><xmp>int main(argc, argv)
int argc; char *argv;</xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an19" id="rd18"><xmp>int main()
{
int argc; char *argv;
}</xmp>
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an19" id="rd18">None of above
                              </label>
                            </div>
                    </div>
                    <!-- Question20 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 20: What do the 'c' and 'v' in argv stands for?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an20" id="rd19">'c' means argument control 'v' means argument vector
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an20" id="rd19">'c' means argument count 'v' means argument vertex
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an20" id="rd19">'c' means argument count 'v' means argument vector
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an20" id="rd19">'c' means argument configuration 'v' means argument visibility
                              </label>
                            </div>
                    </div>
                    <!-- Question21 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 21: What do the 'c' and 'v' in argv stands for?</h3>
                        <xmp>
                            #include<stdio.h>
                            #include<stdarg.h>
                            void fun(char *msg, ...);

                            int main()
                             {
                              fun("IndiaBIX", 1, 4, 7, 11, 0);
                               return 0;
                             }
                            void fun(char *msg, ...)
                            {
                               va_list ptr;
                               int num;
                               va_start(ptr, msg);
                               num = va_arg(ptr, int);
                               num = va_arg(ptr, int);
                               printf("%d", num);
                            }
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an21" id="rd20">0
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an21" id="rd20">1
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an21" id="rd20">4
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an21" id="rd20">7
                              </label>
                            </div>
                    </div>
                    <!-- Question22 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 22: How will you free the allocated memory ?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an22" id="rd21">remove(var-name);
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="20" name="an22" id="rd21">free(var-name);
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="30" name="an22" id="rd21">delete(var-name);
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="40" name="an22" id="rd21">dalloc(var-name);
                              </label>
                            </div>
                    </div>
                    <!-- Question23 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 23: What is the notation for following functions?</h3>
                        <xmp>
                           1.  int f(int a, float b)
                              {
                                 /* Some code */
                              }

                           2.  int f(a, b)
                                  int a; float b;
                                     {
                                        /* Some code */
                                     }
                    </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an23" id="rd22">1. KR Notation<br/>2. ANSI Notation
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an23" id="rd22">1. Pre ANSI C Notation<br/>2. KR Notation
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an23" id="rd22">1. ANSI Notation<br/>2. KR Notation
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an22" id="rd21">1. ANSI Notation<br/>2. Pre ANSI Notation
                              </label>
                            </div>
                    </div>
                    <!-- Question24 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 24: How many times the program will print "IndiaBIX" ?</h3>
                        <xmp>
                           #include<stdio.h>
                              int main()
                              {
                                printf("IndiaBIX");
                                main();
                                return 0;
                              }
                    </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an24" id="rd23">Infinite times
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an24" id="rd23">32767 times
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an24" id="rd23">65535 times
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an24" id="rd23">Till stack overflows
                              </label>
                            </div>
                    </div>
                    <!-- Question25 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 25: In the following code, the P2 is Integer Pointer or Integer?</h3>
                        <xmp>
                           typedef int *ptr;
                            ptr p1, p2;
                    </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an25" id="rd24">Integer
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an25" id="rd24">Integer pointer
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an25" id="rd24">Error in declaration
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an25" id="rd24">None of above
                              </label>
                            </div>
                    </div>
                    <!-- Question26 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 26: In the following code what is 'P'?</h3>
                        <xmp>
                           typedef char *charp;
                           const charp P;
                    </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an26" id="rd25">P is a constant
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an26" id="rd25">P is a character constant
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an26" id="rd25">P is character type
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an26" id="rd25">None of above
                              </label>
                            </div>
                    </div>
                    <!-- Question27 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 27: What is x in the following program?</h3>
                        <xmp>
                           #include<stdio.h>

                           int main()
                           {
                             typedef char (*(*arrfptr[3])())[10];
                             arrfptr x;
                             return 0;
                           }
                    </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an27" id="rd26">x is a pointer
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an27" id="rd26">x is an array of three pointer
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an27" id="rd26">x is an array of three function pointers
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an27" id="rd26">Error in x declaration
                              </label>
                            </div>
                    </div>
                    <!-- Question28 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 28: If the two strings are identical, then strcmp() function returns?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an28" id="rd27">-1
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an28" id="rd27">1
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an28" id="rd27">0
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an28" id="rd27">Yes
                              </label>
                            </div>
                    </div>
                    <!-- Question29 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 29: The library function used to find the last occurrence of a character in a string is?</h3>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an29" id="rd28">strnstr()
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an29" id="rd28">laststr()
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an29" id="rd28">strrchr()
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an29" id="rd28">strstr()
                              </label>
                            </div>
                    </div>
                    <!-- Question30 -->
                    <div class="jumbotron">  
                        <h3 class="display-5">Question 30: What does the following declaration mean?</h3>
                        <xmp>
                            int (*ptr)[10];
                        </xmp>
                        <br/>
                        <br/>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="10" name="an30" id="rd29">ptr is array of pointers to 10 integers
                             </label>
                               </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="20" name="an30" id="rd29">ptr is a pointer to an array of 10 integers
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="30" name="an30" id="rd29">ptr is an array of 10 integers
                              </label>
                            </div>
                        <div class="form-check form-check-inline">
                              <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="40" name="an30" id="rd29">ptr is an pointer to array
                              </label>
                            </div>
                    </div>
                    <!-- ======================================================================= -->
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>     
     </div>
     <br/>
     <br/>
     <br/>
    </body>
</html>
