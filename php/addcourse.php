<form class="form-horizontal" action="process_course.php" method="post" id="new-course">
  <div class="form-group">
    <label for="course_code" class="col-sm-2 control-label">Course Code</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" name='course_code' id="course_code" placeholder="Course Code" required>
    </div>
  </div>
    <div class="form-group">
    <label for="course_name" class="col-sm-2 control-label">Course Name</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" name='course_name' id="course_name" placeholder=" Course Name" required>
    </div>
  </div>
    <div class="form-group">
    <label for="mat" class="col-sm-2 control-label">Course CreditHour</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" name='mat' id="mat" placeholder=" Credit Hour" required>
    </div>
  </div>
   <div class="form-group">
     <label for="mat" class="col-sm-2 control-label">Description</label>
       <textarea  rows="3" class="form-control" name="desc" id="desc">
                      
       </textarea>
 </div>
   <button class="btn btn-primary" role="submit">Save Coutse</button>

  </form>