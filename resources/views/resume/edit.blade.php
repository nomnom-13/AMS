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
                        <span>Hire</span>
                    </div>
                </div>
            </div>

            <div class="editable">
                <form action="{{ route('resume.update', $resume->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="mb-2 save-button">
                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-floppy"></i> Save
                            Changes</button>
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
                                        alt="Applicant Image">
                                    <input type="file" class="form-control @error('image') border border-danger-subtle @enderror" id="image" name="image">
                                    @error('image')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="job">Job Position</label>
                                        <input type="text"
                                            class="form-control @error('job') border border-danger-subtle @enderror"
                                            id="job" name="job" placeholder="Job Position"
                                            value="{{ ucwords($resume->applyingFor) }}">
                                        @error('job')
                                            <div class="invalid">{{ $message }}</div>
                                        @enderror
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
                                    <input type="text"
                                        class="form-control @error('lastname') border border-danger-subtle @enderror"
                                        id="lastname" name="lastname" placeholder="Last Name"
                                        value="{{ ucwords($resume->applicantLastName) }}">
                                    @error('lastname')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-5">
                                    <label for="firstname">First Name</label>
                                    <input type="text"
                                        class="form-control @error('firstname') border border-danger-subtle @enderror"
                                        id="firstname" name="firstname" placeholder="First Name"
                                        value="{{ ucwords($resume->applicantFirstName) }}">
                                    @error('firstname')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label for="middle">M.I.</label>
                                    <input type="text"
                                        class="form-control @error('middle') border border-danger-subtle @enderror"
                                        id="middle" name="middle" placeholder="M.I."
                                        value="{{ ucwords($resume->applicantMiddleInitial) }}">
                                    @error('middle')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="address">Address</label>
                                    <input type="text"
                                        class="form-control @error('address') border border-danger-subtle @enderror"
                                        id="address" name="address" placeholder="Address"
                                        value="{{ ucwords($resume->address) }}">
                                    @error('address')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="number">Contact No.</label>
                                    <input type="text"
                                        class="form-control @error('number') border border-danger-subtle @enderror"
                                        id="number" name="number" placeholder="Contact No."
                                        value="{{ $resume->contactNo }}">
                                    @error('number')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="email">Email</label>
                                    <input type="email"
                                        class="form-control @error('email') border border-danger-subtle @enderror"
                                        id="email" name="email" placeholder="Email"
                                        value="{{ $resume->email }}">
                                    @error('email')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12">
                                    <label for="objective">Objective</label>
                                    <textarea class="form-control @error('objective') border border-danger-subtle @enderror" name="objective"
                                        id="objective" cols="30" rows="5">{{ ucfirst($resume->objective) }}</textarea>
                                    @error('objective')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="personal-information" id="personal-information">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-5">
                                    <label for="birthday">Date of Birth</label>
                                    <input type="date"
                                        class="form-control @error('birthday') border border-danger-subtle @enderror"
                                        id="birthday" name="birthday" placeholder="Date of Birth"
                                        value="{{ $resume->dateOfBirth }}">
                                    @error('birthday')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-5">
                                    <label for="birthplace">Place of Birth</label>
                                    <input type="text"
                                        class="form-control @error('birthplace') border border-danger-subtle @enderror"
                                        id="birthplace" name="birthplace" placeholder="Place of Birth"
                                        value="{{ ucwords($resume->placeOfBirth) }}">
                                    @error('birthplace')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label for="email">Sex</label>
                                    <input type="text"
                                        class="form-control @error('sex') border border-danger-subtle @enderror"
                                        id="sex" name="sex" placeholder="Sex"
                                        value="{{ ucwords($resume->sex) }}">
                                    @error('sex')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="civil">Civil Status</label>
                                    <input type="text"
                                        class="form-control @error('civil') border border-danger-subtle @enderror"
                                        id="civil" name="civil" placeholder="Status"
                                        value="{{ ucwords($resume->civilStatus) }}">
                                    @error('civil')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="religion">Religion</label>
                                    <input type="text"
                                        class="form-control @error('religion') border border-danger-subtle @enderror"
                                        id="religion" name="religion" placeholder="Religion"
                                        value="{{ ucwords($resume->religion) }}">
                                    @error('religion')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="nationality">Nationality</label>
                                    <input type="text"
                                        class="form-control @error('nationality') border border-danger-subtle @enderror"
                                        id="nationality" name="nationality" placeholder="Nationality"
                                        value="{{ ucwords($resume->nationality) }}">
                                    @error('nationality')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-6">
                                    <label for="father">Father's Name</label>
                                    <input type="text"
                                        class="form-control @error('father') border border-danger-subtle @enderror"
                                        id="father" name="father" placeholder="Father's Name"
                                        value="{{ ucwords($resume->fatherName) }}">
                                    @error('father')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="mother">Mother's Name</label>
                                    <input type="text"
                                        class="form-control @error('mother') border border-danger-subtle @enderror"
                                        id="mother" name="mother" placeholder="Mother's Name"
                                        value="{{ ucwords($resume->motherName) }}">
                                    @error('mother')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="educational-attainment" id="educational-attainment">
                        <p class="fw-bold">Tertiary</p>
                        <div class="mb-3">
                            <label for="tschool">College</label>
                            <input type="text"
                                class="form-control @error('tschool') border border-danger-subtle @enderror"
                                id="tschool" name="tschool" placeholder="University or College"
                                value="{{ ucwords($resume->tertiarySchool) }}">
                            @error('tschool')
                                <div class="invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="taddress">College Address</label>
                            <input type="text"
                                class="form-control @error('taddress') border border-danger-subtle @enderror"
                                id="taddress" name="taddress" placeholder="College Address"
                                value="{{ ucwords($resume->tertiaryAddress) }}">
                            @error('taddress')
                                <div class="invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-8">
                                    <label for="course">Course</label>
                                    <input type="text"
                                        class="form-control @error('course') border border-danger-subtle @enderror"
                                        id="course" name="course" placeholder="Course"
                                        value="{{ ucwords($resume->tertiaryCourse) }}">
                                    @error('course')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="tyear">Year Attended</label>
                                    <input type="text"
                                        class="form-control @error('tyear') border border-danger-subtle @enderror"
                                        id="tyear" name="tyear" placeholder="Year Attended"
                                        value="{{ ucwords($resume->tertiaryYear) }}">
                                    @error('tyear')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        <p class="fw-bold">Secondary</p>
                        <div class="mb-3">
                            <label for="sschool">Senior High School</label>
                            <input type="text"
                                class="form-control @error('sschool') border border-danger-subtle @enderror"
                                id="sschool" name="sschool" placeholder="School"
                                value="{{ ucwords($resume->secondaryShsSchool) }}">
                            @error('sschool')
                                <div class="invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-8">
                                    <label for="saddress">School Address</label>
                                    <input type="text"
                                        class="form-control @error('saddress') border border-danger-subtle @enderror"
                                        id="saddress" name="saddress" placeholder="School Address"
                                        value="{{ ucwords($resume->secondaryShsAddress) }}">
                                    @error('saddress')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="syear">Year Attended</label>
                                    <input type="text"
                                        class="form-control @error('syear') border border-danger-subtle @enderror"
                                        id="syear" name="syear" placeholder="Year Attended"
                                        value="{{ $resume->secondaryShsYear }}">
                                    @error('syear')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if ($resume->secondaryJhsSchool)
                            <div class="mb-3">
                                <label for="jschool">Junior High School</label>
                                <input type="text"
                                    class="form-control @error('jschool') border border-danger-subtle @enderror"
                                    id="jschool" name="jschool" placeholder="School"
                                    value="{{ ucwords($resume->secondaryJhsSchool) }}">
                                @error('jschool')
                                    <div class="invalid">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="jaddress">School Address</label>
                                        <input type="text"
                                            class="form-control @error('jaddress') border border-danger-subtle @enderror"
                                            id="jaddress" name="jaddress" placeholder="School Address"
                                            value="{{ ucwords($resume->secondaryJhsAddress) }}">
                                        @error('jaddress')
                                            <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="jyear">Year Attended</label>
                                        <input type="text"
                                            class="form-control @error('jyear') border border-danger-subtle @enderror"
                                            id="jyear" name="jyear" placeholder="Year Attended"
                                            value="{{ $resume->secondaryJhsYear }}">
                                        @error('jyear')
                                            <div class="invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif

                        <hr>

                        <p class="fw-bold">Primary</p>
                        <div class="mb-3">
                            <label for="pschool">School</label>
                            <input type="text"
                                class="form-control @error('pschool') border border-danger-subtle @enderror"
                                id="pschool" name="pschool" placeholder="School"
                                value="{{ ucwords($resume->primarySchool) }}">
                            @error('pschool')
                                <div class="invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="row">
                                <div class="col-8">
                                    <label for="paddress">School Address</label>
                                    <input type="text"
                                        class="form-control @error('paddress') border border-danger-subtle @enderror"
                                        id="paddress" name="paddress" placeholder="School Address"
                                        value="{{ ucwords($resume->primaryAddress) }}">
                                    @error('paddress')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="pyear">Year Attended</label>
                                    <input type="text"
                                        class="form-control @error('pyear') border border-danger-subtle @enderror"
                                        id="pyear" name="pyear" placeholder="Year Attended"
                                        value="{{ $resume->primaryYear }}">
                                    @error('pyear')
                                        <div class="invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-navbar>
