<x-navbar>
    <div class="container-fluid">
        <div class="wrapper">
            <div class="edit-sidenav">
                <ul class="edit-nav">
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="#" class="editnav-link active" id="profile">Profile</a></li>
                    <li><a href="#" class="editnav-link" id="personal">Personal Information</a></li>
                    <li><a href="#" class="editnav-link" id="education">Educational Attainment</a></li>
                    <li>
                        <div class="dropdown applicant-status">
                            <form action="{{ route('resume.update', $resume->id) }}" method="post">
                                @csrf

                                @method('PUT')
                                <input type="hidden" name="resumeId" id="resumeId" value="{{ $resume->id }}">
                                <select class="form-select select-status" name="applicantStatus" id="applicationStatus"
                                    onchange="this.form.submit()">
                                    <option selected>{{ ucwords($resume->applicantStatus) }}</option>
                                    @foreach (['new', 'screening', 'for interview', 'hired', 'dropped'] as $option)
                                        @if ($option !== $resume->applicantStatus)
                                            <option value="{{ $option }}">{{ ucwords($option) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </li>
                </ul>
                <div class="status-progress">
                    <div class="circle circle-1"><i class="bi bi-check-lg"></i><span>New</span></div>
                    <div class="circle circle-2"><i class="bi bi-check-lg"></i><span>Screening</span></div>
                    <div class="circle circle-3"><i class="bi bi-check-lg"></i><span>Interview</span></div>
                    <div class="circle circle-4"><i class="bi bi-check-lg"></i> 
                        <span>Hire</span></div>
                </div>
            </div>

            <div class="editable">
                <form action="{{ route('resume.update', $resume->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="mb-2 save-button">
                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-floppy"></i> Save Changes</button>
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="profile-edit" id="profile-edit">
                        <div class="mb-4">
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $resume->applicantImage) }}" class="edit-image mb-2"
                                        alt="">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="job">Job Position</label>
                                        <input type="text" class="form-control" id="job" name="job"
                                            placeholder="Job Position" value="{{ ucwords($resume->applyingFor) }}">
                                    </div>
                                    <div class="dropdown">
                                        <label for="link">Apply through</label>
                                        <select class="form-select" name="applicationFrom">
                                            <option selected>{{ $resume->applicationFrom }}</option>
                                            @foreach (['Indeed', 'Jobstreet', 'LinkedIn'] as $option)
                                                @if ($option !== $resume->applicationFrom)
                                                    <option value="{{ $option }}">{{ $option }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-5">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="Last Name" value="{{ ucwords($resume->applicantLastName) }}">
                                </div>
                                <div class="col-5">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        placeholder="First Name" value="{{ ucwords($resume->applicantFirstName) }}">
                                </div>
                                <div class="col-2">
                                    <label for="middle">M.I.</label>
                                    <input type="text" class="form-control" id="middle" name="middle"
                                        placeholder="M.I." value="{{ ucwords($resume->applicantMiddleInitial) }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" value="{{ ucwords($resume->address) }}">
                                </div>
                                <div class="col-4">
                                    <label for="number">Contact No.</label>
                                    <input type="text" class="form-control" id="number" name="number"
                                        placeholder="Contact No." value="{{ $resume->contactNo }}">
                                </div>
                                <div class="col-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" value="{{ $resume->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12">
                                    <label for="objective">Objective</label>
                                    <textarea class="form-control" name="objective" id="objective" cols="30" rows="5">{{ ucfirst($resume->objective) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="personal-information" id="personal-information">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-5">
                                    <label for="birthday">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday"
                                        placeholder="Date of Birth" value="{{ $resume->dateOfBirth }}">
                                </div>
                                <div class="col-5">
                                    <label for="birthplace">Place of Birth</label>
                                    <input type="text" class="form-control" id="birthplace" name="birthplace"
                                        placeholder="Place of Birth" value="{{ ucwords($resume->placeOfBirth) }}">
                                </div>
                                <div class="col-2">
                                    <label for="email">Sex</label>
                                    <input type="text" class="form-control" id="sex" name="sex"
                                        placeholder="Sex" value="{{ ucwords($resume->sex) }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="civil">Civil Status</label>
                                    <input type="text" class="form-control" id="civil" name="civil"
                                        placeholder="Status" value="{{ ucwords($resume->civilStatus) }}">
                                </div>
                                <div class="col-4">
                                    <label for="religion">Religion</label>
                                    <input type="text" class="form-control" id="religion" name="religion"
                                        placeholder="Religion" value="{{ ucwords($resume->religion) }}">
                                </div>
                                <div class="col-4">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality"
                                        placeholder="Nationality" value="{{ ucwords($resume->nationality) }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-6">
                                    <label for="father">Father's Name</label>
                                    <input type="text" class="form-control" id="father" name="father"
                                        placeholder="Father's Name" value="{{ ucwords($resume->fatherName) }}">
                                </div>
                                <div class="col-6">
                                    <label for="mother">Mother's Name</label>
                                    <input type="text" class="form-control" id="mother" name="mother"
                                        placeholder="Mother's Name" value="{{ ucwords($resume->motherName) }}">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="educational-attainment" id="educational-attainment">
                        <p class="fw-bold">Tertiary</p>
                        <div class="mb-3">
                            <label for="tschool">College</label>
                            <input type="text" class="form-control" id="tschool" name="tschool"
                                placeholder="University or College" value="{{ ucwords($resume->tertiarySchool) }}">
                        </div>
                        <div class="mb-3">
                            <label for="taddress">College Address</label>
                            <input type="text" class="form-control" id="taddress" name="taddress"
                                placeholder="College Address" value="{{ ucwords($resume->tertiaryAddress) }}">
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-8">
                                    <label for="course">Course</label>
                                    <input type="text" class="form-control" id="course" name="course"
                                        placeholder="Course" value="{{ ucwords($resume->tertiaryCourse) }}">
                                </div>
                                <div class="col-4">
                                    <label for="tyear">Year Attended</label>
                                    <input type="text" class="form-control" id="tyear" name="tyear"
                                        placeholder="Year Attended" value="{{ ucwords($resume->tertiaryYear) }}">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <p class="fw-bold">Secondary</p>
                        <div class="mb-3">
                            <label for="sschool">Senior High School</label>
                            <input type="text" class="form-control" id="sschool" name="sschool"
                                placeholder="School" value="{{ ucwords($resume->secondaryShsSchool) }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-8">
                                    <label for="saddress">School Address</label>
                                    <input type="text" class="form-control" id="saddress" name="saddress"
                                        placeholder="School Address"
                                        value="{{ ucwords($resume->secondaryShsAddress) }}">
                                </div>
                                <div class="col-4">
                                    <label for="syear">Year Attended</label>
                                    <input type="text" class="form-control" id="syear" name="syear"
                                        placeholder="Year Attended" value="{{ $resume->secondaryShsYear }}">
                                </div>
                            </div>
                        </div>
                        @if ($resume->secondaryJhsSchool)
                            <div class="mb-3">
                                <label for="jschool">Junior High School</label>
                                <input type="text" class="form-control" id="jschool" name="jschool"
                                    placeholder="School" value="{{ ucwords($resume->secondaryJhsSchool) }}">
                            </div>
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="jaddress">School Address</label>
                                        <input type="text" class="form-control" id="jaddress" name="jaddress"
                                            placeholder="School Address"
                                            value="{{ ucwords($resume->secondaryJhsAddress) }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="jyear">Year Attended</label>
                                        <input type="text" class="form-control" id="jyear" name="jyear"
                                            placeholder="Year Attended" value="{{ $resume->secondaryJhsYear }}">
                                    </div>
                                </div>
                            </div>
                        @endif

                        <hr>

                        <p class="fw-bold">Primary</p>
                        <div class="mb-3">
                            <label for="pschool">School</label>
                            <input type="text" class="form-control" id="pschool" name="pschool"
                                placeholder="School" value="{{ ucwords($resume->primarySchool) }}">
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="row">
                                <div class="col-8">
                                    <label for="paddress">School Address</label>
                                    <input type="text" class="form-control" id="paddress" name="paddress"
                                        placeholder="School Address" value="{{ ucwords($resume->primaryAddress) }}">
                                </div>
                                <div class="col-4">
                                    <label for="pyear">Year Attended</label>
                                    <input type="text" class="form-control" id="pyear" name="pyear"
                                        placeholder="Year Attended" value="{{ $resume->primaryYear }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-navbar>
