
*This Folder Comprises of implemented Project and Record Softcopy files*

PROJECT NAME : CONFERENCE MANAGEMENT SYSTEM

DESCRIPTION OF PROJECT :

The conference management system is an online application in which the candidate can submit abstract of the paper and register 
themselves and then attend the conference.The paper will be reviewed.The details of the conference,date and time will be made 
available to them through the application

ABOUT THE PROJECT :

Technologies Used :

	1.NetBeans IDE 8.2 (Front End)
	2.MySQL 8.0	(Back End)
	
NetBeans Src files :

	1.Conference.java : main class files
	2.date_loc.java : Random date and location generating class.
	3.logn.java, logn.form : Java and Form file associated with login functionality.
	4.paper_details.java, paper_details2.java : Java and Form file associated with displaying paper details of student.
	5.paper_details.form, paper_details.java : Java and Form file associated with displaying paper details to reviewer.
	6.paper_submit.java, paper_submit : Java and Form file associated with submitting paper functionality.
	7.paper_review.java, paper_review.form  : Java and Form file associated with reviewing paper functionality.
	8.register.java, register.form : Java and Form file associated with register functionality.
	9.review_update.java, review_update.form : Java and Form file associated with update abstract functionality.
	10.view_paper.java, view_paper.form, view_paper2.java, view_paper2.form : Java and Form files associated with 
	viewing paper functionality.
	
MySQL database details :

	Database Used : conference.
	
	Tables Used :
	1.student - consists of details of student 
	Primary Key - ID.
	2.reviewer - consists of details of reviewer
	Primary Key - ID.
	3.paper - consists of details of paper
	Primary Key - ID
	Foreign Keys - student_id, reviewer_id.
	
Worlflow of the Project :

	* A login/register form is displayed to the user when opening the conference management system software.
	* If the user is a student/candidate he/she uses student login else reviewer login.
	* The student login displays a form with various options like submit paper,update paper,view paper which the student can perform.
	* The reviewer login displays a form with various options like review paper,view paper which the reviewer can perform.
	* Once the reviewer reviews the student's paper the conference date and location are displayed to the student for the
	correspoding paper.
	* After performing the neccesary functionality the student/candidate logouts of the system.

	
	





