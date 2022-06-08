<section class="container text-center" id="blogs">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/post_login" style="font-size: 11pt; font-family: symbol;">Home</a>
        </li>
              
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 11pt; font-family: symbol;">
        MBA Information
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="dropdown-item" href="/batcheslist" style="font-size: 10pt; font-family: symbol;">Batch</a></li>
         <li><a class="dropdown-item" href="/teachers" style="font-size: 10pt; font-family: symbol;">Lecturers</a></li>
         <li><a class="dropdown-item" href="/subjectslist" style="font-size: 10pt; font-family: symbol;">Subjects</a></li>
         <li><a class="dropdown-item" href="/oldquestionslist" style="font-size: 10pt; font-family: symbol;">Old Questions</a></li>
         <li><a class="dropdown-item" href="/paperslist" style="font-size: 10pt; font-family: symbol;">Papers</a></li>
        </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/comments" style="font-size: 11pt; font-family: symbol;">Q & A</a>
        </li>

        @if(auth()->user()->is_admin)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 11pt; font-family: symbol;">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <li><a class="dropdown-item" href="/infodistribution" style="font-size: 10pt; font-family: symbol;">Information Distribution</a></li> -->
          <li><a class="dropdown-item" href="/registerbatch" style="font-size: 10pt; font-family: symbol;">Batch Registration</a></li>
          <li><a class="dropdown-item" href="/registersubjectandteacher" style="font-size: 10pt; font-family: symbol;">Subject & Teachers Registration</a></li>
          <li><a class="dropdown-item" href="/registerassignment" style="font-size: 10pt; font-family: symbol;">Assignments Upload</a></li>
          <li><a class="dropdown-item" href="/registerstudent" style="font-size: 10pt; font-family: symbol;">Student Registration</a></li>
          <li><a class="dropdown-item" href="/registeruser" style="font-size: 10pt; font-family: symbol;">User Registration</a></li>
          <li><a class="dropdown-item" href="/registerlecturer" style="font-size: 10pt; font-family: symbol;">Lecturer Registration</a></li>
          <li><a class="dropdown-item" href="/registersubject" style="font-size: 10pt; font-family: symbol;">Subject Registration</a></li>
          <li><a class="dropdown-item" href="/registerquestions" style="font-size: 10pt; font-family: symbol;">Old Questions Registration</a></li>  
          <li><a class="dropdown-item" href="/registerpapers" style="font-size: 10pt; font-family: symbol;">Paper Registration</a></li>  
        </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 11pt; font-family: symbol;">
            Information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/teachersedit" style="font-size: 10pt; font-family: symbol;">Lecturer</a></li>
          <li><a class="dropdown-item" href="/adminuserlist" style="font-size: 10pt; font-family: symbol;">Users</a></li>
          <li><a class="dropdown-item" href="/subjects" style="font-size: 10pt; font-family: symbol;">Subjects</a></li>
          <li><a class="dropdown-item" href="/subjectsandteachers" style="font-size: 10pt; font-family: symbol;">Subjects & Teachers</a></li>
          <li><a class="dropdown-item" href="/assignments" style="font-size: 10pt; font-family: symbol;">Assignments</a></li>
          <li><a class="dropdown-item" href="/batches" style="font-size: 10pt; font-family: symbol;">Batch</a></li>
          <li><a class="dropdown-item" href="/oldquestionslistedit" style="font-size: 10pt; font-family: symbol;">Old Questions</a></li>
          <li><a class="dropdown-item" href="/paperslistedit" style="font-size: 10pt; font-family: symbol;">Papers</a></li>
        </ul>
        @endif
        </li>
      </ul>

    </div>
  </div>
</nav>
</section>