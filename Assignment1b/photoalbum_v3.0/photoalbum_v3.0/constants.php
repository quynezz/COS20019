<?php
/**
* 	All constants defined in this file
*
*	@author Swinburne University of Technology
*
*
*	============ READ ME !!! ============ 
* 	============ READ ME !!! ============ 
* 	============ READ ME !!! ============ 
*
*	Directory structure:
*	var
*	â””â”€â”€â”€www
*		â””â”€â”€â”€html
*			â””â”€â”€â”€cos20019
*	    		â””â”€â”€â”€photoalbum (this directory contains source files of the PhotoAlbum website)
*	   				â”‚   album.php 					(executable) display all images in DB
*	   				â”‚   const.php 					Constants defined here
*	   				â”‚   defaultstyle.css			CSS style for the website
*	   				â”‚   mydb.php					Interact with RDS DB
*	   				â”‚   photo.php					Photo object class
*	   				â”‚
*	
*	
*	The values of the constant variables with "[ACTION REQUIRED]" in the comment must be updated. The current values are just examples.
*	You need to replace the values of those constant variables with values specific to your setup.
*
* 	
* 	============ READ THE ABOVE !!! ============ 
* 	============ READ THE ABOVE !!! ============ 
* 	============ READ THE ABOVE !!! ============ 
*/

// [ACTION REQUIRED] your full name
define('STUDENT_NAME', 'Lau Ngoc Quyen');
// [ACTION REQUIRED] your Student ID
define('STUDENT_ID', '104198996');
// [ACTION REQUIRED] your tutorial session
define('TUTORIAL_SESSION', 'Tuesday 7:AM');

// [ACTION REQUIRED] name of the S3 bucket that stores images
define('BUCKET_NAME', 'swinbucketphoto');
// [ACTION REQUIRED] region of the above bucket
define('REGION', 'us-east-1');
// no need to update this const
define('S3_BASE_URL','https://'.BUCKET_NAME.'.s3.amazonaws.com/');

// [ACTION REQUIRED] name of the database that stores photo meta-data (note that this is not the DB identifier of the RDS instance)
define('DB_NAME', 'Photos');
// [ACTION REQUIRED] endpoint of RDS instance
define('DB_ENDPOINT', 'database-1.cb6gi6wkspho.us-east-1.rds.amazonaws.com');
// [ACTION REQUIRED] username of your RDS instance 
define('DB_USERNAME', 'admin');
// [ACTION REQUIRED] password of your RDS instance
define('DB_PWD', 'admin123');

// [ACTION REQUIRED] name of the DB table that stores photo's meta-data
define('DB_PHOTO_TABLE_NAME', 'photos');
// The table above has 5 columns:
// [ACTION REQUIRED] name of the column in the above table that stores photo's titles
define('DB_PHOTO_TITLE_COL_NAME', 'PhotoTitle');
// [ACTION REQUIRED] name of the column in the above table that stores photo's descriptions
define('DB_PHOTO_DESCRIPTION_COL_NAME', 'Description');
// [ACTION REQUIRED] name of the column in the above table that stores photo's creation dates
define('DB_PHOTO_CREATIONDATE_COL_NAME', 'CreationDate');
// [ACTION REQUIRED] name of the column in the above table that stores photo's keywords
define('DB_PHOTO_KEYWORDS_COL_NAME', 'Keywords');
// [ACTION REQUIRED] name of the column in the above table that stores photo's links in S3 
define('DB_PHOTO_S3REFERENCE_COL_NAME', 'References');
?>