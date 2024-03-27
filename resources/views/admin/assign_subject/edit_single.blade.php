@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Assign Subject</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group"> 
                        <label>Class Name</label>
                        <select name="class_id" required class="form-control">
                          <option value="">Select Class</option>  
                          @foreach ($getClass as $class)
                          <option {{ ($getRecord->class_id == $class->id) ? 'selected' : '' }} value="{{ $class->id }}">{{ $class->name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group"> 
                        <label>Subject Name</label>
                        <select name="subject_id" required class="form-control">
                          <option value="">Select Subject</option>  
                          @foreach ($getSubject as $subject)
                          <option {{ ($getRecord->subject_id == $subject->id) ? 'selected' : '' }} value="{{ $subject->id }}">{{ $subject->name }}</option>
                          @endforeach
                      </select>
                    </div>

        
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                            <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Inactive</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection