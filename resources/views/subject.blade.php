 @extends('layout')
 @section('content') 
 
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-12 ">
            <div class="card-body ">
              <h3 class="card-title text-left ">Select Semester</h3> 
				<form class="forms-sample" action="{{URL::to('/subject_list')}}">
				{{csrf_field()}}  
				  <div class="form-group">
					  <label>Department</label> 
					  <select type="" name="student_semester" id="">
						<option value="1">Spring-19</option>
						<option value="2">Summer-19</option> 
						<option value="3">Spring-20</option>
						<option value="5">Spring-20</option>
					  </select>
				  </div>   
				  <button type="submit" class="btn btn-success">Submit</button>
			  </form> 
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div> 
 @endsection