<?php

echo'
<form action="home.php" method="get">
<h1>Select</h1>
<lable>Enter ID</lable>
<input type=text name=book_id><br>
<input type=submit value="show book info" name="select">
</form>';

echo'
<form action="home.php" method="get">
<h1>Update</h1>
<lable>Enter ID</lable>
<input type=text name=book_id><br>
<lable>Enter Name</lable>
<input type=text name=name><br>
<lable>Enter Image Name</lable>
<input type=text name=image><br>
<lable>Enter Details</lable>
<input type=text name=details><br>
<lable>Enter Price</lable>
<input type=text name=price><br>
<input type=submit value="update book info" name="update">
</form>';

echo'
<form action="home.php" method="get">
<h1>Add Column</h1>

<lable>Enter Name</lable>
<input type=text name=name><br>
<lable>Enter Image Name</lable>
<input type=text name=image><br>
<lable>Enter Details</lable>
<input type=text name=details><br>
<lable>Enter Price</lable>
<input type=text name=price><br>
<input type=submit value="Add new book" name="add">
</form>';

echo'
<form action="home.php" method="get">
<h1>Delete</h1>
<lable>Enter ID</lable>
<input type=text name=book_id><br>
<input type=submit value="delete book" name="delete">
</form>';
?>