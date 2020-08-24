<?php 
/*-
----
Routing home
*/
// Route::go('home', 'HomeController@index');

/*-
----
Routing User Pages
*/
Route::go('user','UserController@index');

Route::go('userinsert','UserController@insert');
Route::go('insertUser','UserController@insertUser');

Route::go("userdelete/$id",'UserController@delete');

Route::go("userupdate/$id",'UserController@update');
Route::go("updateUser",'UserController@updateUser');

Route::go("userlogin", "UserController@userlogin");
// Route::go("login", "UserController@login");
Route::go("logout", "UserController@logout");

Route::go("usersignup", "UserController@usersignup");
Route::go("signup", "UserController@signup");

Route::go("multiUpload", "UserController@multiUpload");
Route::go("multi", "UserController@tomultiUploader");




/*-
----
Routing user pages
*/
Route::go('home', 'CourseController@home');
Route::go('viewAll', 'CourseController@viewAll');
Route::go('catAndCourse', 'CourseController@catAndCourse');
Route::go('readCourse', 'CourseController@readCourse');

/*-
----
Routing admin pages
*/
Route::go('dashboard', 'AdminController@dashboard');
Route::go('viewCourse', 'CourseController@viewCourse');
Route::go('history', 'AdminController@history');
Route::go('advertisement', 'AdminController@adver');
/*-
----
Uploading Couer Cover Photo
*/
Route::go("coverUpload", 'CourseController@coverUpload');

/*-
----
Creating course operations
*/
Route::go('createCourse', 'CourseController@createCourse');
Route::go('createArticle', 'CourseController@createArticle');
Route::go('createContent', 'CourseController@createContent');
/*-
----
Saving and Updating course name
*/
Route::go('courseNameSave', 'CourseController@courseNameSave');
Route::go('courseIdSelector', 'CourseController@courseIdSelector');
Route::go('courseNameUpdate', 'CourseController@courseNameUpdate');
/*-
----
Saving and Updating article name
*/
Route::go('articleNameSave', 'CourseController@articleNameSave');
Route::go('articleIdSelector', 'CourseController@articleIdSelector');
Route::go('articleNameUpdate', 'CourseController@articleNameUpdate');
/*-
----
Upload topic
*/
Route::go('uploadTopic', 'CourseController@uploadTopic');
/*-
----
Upload course
*/
Route::go('uploadCourse', 'CourseController@uploadCourse');

/*-
----
Upload course
*/
Route::go('deleteCourse', 'CourseController@deleteCourse');

/*-
----
Modifying course
*/
Route::go("modifyCourse", 'CourseController@modifyCourse');
Route::go("updateCourse", 'CourseController@updateCourse');
Route::go("topicUpdate", 'CourseController@topicUpdate');
Route::go("getArticle", "CourseController@getArticle");
Route::go("getOriginTopic", "CourseController@getOriginTopic");
Route::go("moreTopic", "CourseController@moreTopic");
Route::go("deleteTopic", "CourseController@deleteTopic");
Route::go("updateArticle", "CourseController@updateArticle");
Route::go("updateCourseName", "CourseController@updateCourseName");

/*-
----
Report
*/
Route::go('report', 'ReportController@report');
Route::go('saveReport', 'ReportController@saveReport');

/*-
----
Draft
*/
Route::go("test", 'AdminController@test');
Route::go("saveDraft", 'DraftController@saveDraft');
Route::go("draft", 'DraftController@draft');
Route::go("draftEdit", 'DraftController@draftEdit');

/*-
----
Admin Authentication
*/
Route::go('adminLogin', 'AdminController@login');
Route::go('adminSignup', 'AdminController@signup');
Route::go('signupProcess', 'AdminController@signupProcess');
Route::go('loginProcess', 'AdminController@loginProcess');
Route::go('adminLogout', 'AdminController@logout');


 ?>