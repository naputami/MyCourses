\
<div class="container">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNewCourse">
        Add New Course
      </button>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="addNewCourse" tabindex="-1" aria-labelledby="addNewCourseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addNewCourseLabel">Add New Course</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('course.store') }}" class="">
                @csrf
                <div class="mb-3">
                  <label for="course_date" class="form-label">Course Date</label>
                  <input type="date" class="form-control" id="course_date" name="course_date">
                </div>
                <div class="mb-3">
                    <label for="student_id" class="form-label">Student</label>
                    <select class="form-select" aria-label="select subject" name="student_id" id="student_id">
                      <option selected>Select student</option>
                      @foreach ($students as $student )
                          <option value="{{ $student->id }}">{{ $student->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="subject_id" class="form-label">Subject:</label>
                    <select class="form-select" aria-label="select subject" name="subject_id" id="subject_name">
                        <option selected>Select subject</option>
                        @foreach ($subjects as $subject )
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="subject_teacher_id" class="form-label">Subject_teacher</label>
                    <select class="form-select" aria-label="select subject teacher" name="subject_teacher_id" id="subject_teacher">
                        <option selected>Select subject first!</option>
                    </select>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
              </form>
        </div>
       
      </div>
    </div>
  </div>


@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#subject_name').on('change', function () {
                var subject_id = this.value;
                $("#subject_teacher").html('');
                $.ajax({
                    url: "{{ route('fetchTeacher') }}",
                    type: "POST",
                    data: {
                        subject_id: subject_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#subject_teacher').html('<option selected>Select teacher</option>');
                        $.each(result.teachers, function (key, value) {
                            $("#subject_teacher").append('<option value="' + value
                                .subject_teacher_id + '">' + value.teacher_name + '</option>');
                        });
                    },
                    error: function(error) {
                    console.log(error);
                  }
                });
            });
  
</script>
@endpush