<!DOCTYPE html>
<html>

<head>
    <title>Student Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Varela Round -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/app.css" type="text/css" media="all" />
</head>

<body>
    <form action="php/admin.php" method="POST">
        <div class="admin-login">
            <button type="submit" name="admin" value="Admin" id="admin"
                class="custom-btn btn-5 btn-15"><span>Admin</span></button>
        </div>
        <!-- <img src="1.png"  style="float:left ; margin-right:100px; margin-top:35px; margin-left:70px"> -->
    </form>
    <div class="form">
        <h1 class="main-heading">Student Feedback Form</h1>

        <div class="container">
            <h3>
                Fill this student feedback form so that we can make our teaching better.
            </h3>
            <div class="form-first-part">
                <form action="php/feedback.php" method="post" class="student-form">
                    <div class="student-details">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                        <br>
                        <label for="prn">PRN</label>
                        <input type="text" id="prn" name="prn" required>
                        <br>

                        <label for="year">Academic Year</label>
                        <select name="year" id="year" required>
                            <option value="#">____Select Year____</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                        <br />

                        <label for="sem">Semester</label>
                        <select name="sem" id="sem" required>
                            <option value="#">____Select Sem____</option>
                            <option value="1st">Sem I</option>
                            <option value="2nd">Sem II</option>
                            <option value="3rd">Sem III</option>
                            <option value="4th">Sem IV</option>
                            <option value="5th">Sem V</option>
                            <option value="6th">Sem VI</option>
                            <option value="7th">Sem VII</option>
                            <option value="8th">Sem VIII</option>
                        </select>
                        <br />

                        <label for="date">Date of Feedback</label>
                        <input type="date" id="date" name="date" required />
                        <br />

                        <label for="branch">Branch</label>
                        <select name="branch" id="branch" required>
                            <option value="#">_Select Branch_</option>
                            <option value="CSE">CSE</option>
                            <option value="MECH">ME</option>
                            <option value="ELECT">EE</option>
                            <option value="IN">IN</option>
                            <option value="ENTC">ENTC</option>
                            <option value="CIVIL">CIVIL</option>
                        </select>
                        <br />

                        <label for="subject">Subject</label>
                        <select name="subject" id="subject">
                            <option value="#">_Select Subject_</option>
                        </select>
                        <br />
                    </div>
            </div>
            <div class="form-second-part">
                <div class="container">
                    <!-- First Question -->
                    <div>
                        <h4>1) Has the Teacher covered entire Syllabus as prescribed by
                            University?</h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-1-5" name="ques1" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-1-4" name="ques1" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-1-3" name="ques1" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-1-2" name="ques1" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-1-1" name="ques1" value="1" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    <!-- Second Question  -->
                    <div>
                        <h4>2) Effectiveness of Teacher in terms of:</h4>
                        <!-- Question 2i  -->
                        <h4>i. Technical Content</h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2i-5" name="ques-2i" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2i-4" name="ques-2i" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2i-3" name="ques-2i" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2i-2" name="ques-2i" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2i-1" name="ques-2i" value="1" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    <div>

                        <!-- Question 2-ii -->
                        <h4>ii. Communication Skills</h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2ii-5" name="ques-2ii" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2ii-4" name="ques-2ii" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2ii-3" name="ques-2ii" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2ii-2" name="ques-2ii" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2ii-1" name="ques-2ii" value="1" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    <div>

                        <!-- Question 2-iii -->
                        <h4>
                            iii. Availability beyond normal classes and co-operation to solve
                            individual problems
                        </h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iii-5" name="ques-2iii" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iii-4" name="ques-2iii" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iii-3" name="ques-2iii" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iii-2" name="ques-2iii" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iii-1" name="ques-2iii" value="poor" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    <div>

                        <!-- Question 2-iv -->
                        <h4>iv. Pace on which contents were covered</h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iv-5" name="ques-2iv" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iv-4" name="ques-2iv" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iv-3" name="ques-2iv" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iv-2" name="ques-2iv" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2iv-1" name="ques-2iv" value="1" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    <div>

                        <!-- Question 2-v -->
                        <h4>v. Overall effectiveness</h4>
                        <div class="options">
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2v-5" name="ques-2v" value="5" required/>
                                <div class="rad-design"></div>
                                <div class="rad-text">Excellent</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2v-4" name="ques-2v" value="4" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Very Good</div>
                            </label>
                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2v-3" name="ques-2v" value="3" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Good</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2v-2" name="ques-2v" value="2" />
                                <div class="rad-design"></div>
                                <div class="rad-text">Average</div>
                            </label>

                            <label class="rad-label">
                                <input type="radio" class="rad-input" id="ques-2v-1" name="ques-2v" value="1" />
                                <div class="rad-design five"></div>
                                <div class="rad-text five">Poor</div>
                            </label>
                        </div>
                    </div>
                    

                        <!-- Question 3 -->
                        <h4>3) How do you rate the contents of the curricular?</h4>
                        
                                <div class="options">
                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-3-5" name="ques3" value="5" required/>
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Excellent</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-3-4" name="ques3" value="4" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Very Good</div>
                                </label>
                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-3-3" name="ques3" value="3" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Good</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-3-2" name="ques3" value="2" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Average</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-3-1" name="ques3" value="1" />
                                    <div class="rad-design five"></div>
                                    <div class="rad-text five">Poor</div>
                                </label>
                        </div>
                    
                    <div>

                        <!-- Question 4 -->
                        <h4>4) How do you rate lab experiments, if applicable?</h4>
                        <div class="options">
                            
                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-4-5" name="ques4" value="5" required/>
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Excellent</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-4-4" name="ques4" value="4" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Very Good</div>
                                </label>
                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-4-3" name="ques4" value="3" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Good</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-4-2" name="ques4" value="2" />
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Average</div>
                                </label>

                                <label class="rad-label">
                                    <input type="radio" class="rad-input" id="ques-4-1" name="ques4" value="1" />
                                    <div class="rad-design five"></div>
                                    <div class="rad-text five">Poor</div>
                                </label>
                        </div>
                    </div>

                </div>
                <div class="student-feedback textarea ">
                    <h4>5) Any Remarks</h4>
                    <textarea name="remarks" rows="5" cols="50"></textarea>
                </div>

                <div class="submit-form">
                    <input type="submit" name="submit" value="Submit" id="submit" />
                </div>
                </form>
                <br />
            </div>
            <div class="copyright-text">
                <p>© Copyright 2022</p>
            </div>
        </div>
    </div>
</body>
<script src="a.js"></script>
</html>