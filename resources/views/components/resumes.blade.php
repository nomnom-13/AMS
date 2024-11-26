@props(['resume', 'full' => false])


@if ($full)
    <div class="resume-wrapper">
        <div class="resume-holder">
            <div class="resume-header">
                <div class="header-info">
                    <h5> {{ ucwords($resume->applicantLastName) }} , {{ ucwords($resume->applicantFirstName) }}
                        {{ ucwords($resume->applicantMiddleInitial) }}</h5>
                    @if ($resume->applyingFor)
                        <p>{{ ucwords($resume->applyingFor) }}</p>
                    @endif
                    <p>{{ ucwords($resume->address) }}</p>
                    <p>{{ $resume->contactNo }}</p>
                    <p>{{ $resume->email }}</p>
                </div>
                <img src="{{ asset('storage/' . $resume->applicantImage) }}" alt="">
            </div>
            <hr>
            <div class="resume-objective">
                <h5>OBJECTIVE</h5>
                <p>{{ ucfirst($resume->objective) }}</p>
            </div>
            <hr>
            <div class="resume-info">
                <h5>PERSONAL INFORMATION</h5>
                <ul>
                    <li><strong>Date of Birth:</strong>
                        <span>{{ date('F j, Y', strtotime($resume->dateOfBirth)) }}</span>
                    </li>
                </ul>
                <ul>
                    <li><strong>Place of Birth:</strong> <span>{{ ucwords($resume->placeOfBirth) }}</span></li>
                </ul>
                <ul>
                    <li><strong>Sex:</strong> <span>{{ ucwords($resume->sex) }}</span></li>
                </ul>
                <ul>
                    <li><strong>Civil Status:</strong> <span>{{ ucwords($resume->civilStatus)}}</span></li>
                </ul>
                <ul>
                    <li><strong>Religion:</strong> <span>{{ ucwords($resume->religion) }}</span></li>
                </ul>
                <ul>
                    <li><strong>Nationality:</strong> <span>{{ ucwords($resume->nationality) }}</span></li>
                </ul>
                <ul>
                    <li><strong>Father's Name:</strong> <span>{{ ucwords($resume->fatherName) }}</span></li>
                </ul>
                <ul>
                    <li><strong>Mother's Name:</strong> <span>{{ ucwords($resume->motherName) }}</span></li>
                </ul>
            </div>
            <hr>
            <div class="resume-educ">
                <h5>EDUCATIONAL BACKGROUND</h5>
                <ul>
                    <li class="tertiary">
                        <span><strong>Tertiary:</strong></span>
                        <ul>
                            <li>{{ ucwords($resume->tertiarySchool) }}</li>
                            <li>{{ ucwords($resume->tertiaryAddress) }}</li>
                            <li>{{ ucwords($resume->tertiaryCourse) }}</li>
                            <li>{{ ucwords($resume->tertiaryYear) }}</li>
                        </ul>
                    </li>
                    <li class="secondary">
                        <span><strong>Secondary:</strong></span>
                        <ul>
                            <li>{{ ucwords($resume->secondaryShsSchool) }}</li>
                            <li>{{ ucwords($resume->secondaryShsAddress) }}</li>
                            <li>{{ $resume->secondaryShsYear }}</li>
                            @if ($resume->secondaryJhsSchool)
                                <li>{{ ucwords($resume->secondaryJhsSchool) }}</li>
                                <li>{{ ucwords($resume->secondaryJhsAddress) }}</li>
                                <li>{{ $resume->secondaryJhsYear }}</li>
                            @endif
                        </ul>
                    </li>
                    <li class="primary">
                        <span><strong>Primary:</strong></span>
                        <ul>
                            <li>{{ ucwords($resume->primarySchool) }}</li>
                            <li>{{ ucwords($resume->primaryAddress) }}</li>
                            <li>{{ $resume->primaryYear }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
            {{-- <hr>
            <div class="links">
                <h5>LINKS</h5>

            </div> --}}
        </div>
    </div>
@else
    <div class="cv-card" >
        <div class="cv-card-details">
            <img src="{{ asset('storage/' . $resume->applicantImage) }}" alt="Error">
            <div class="applicant">
                <p class="name">{{ ucwords($resume->applicantLastName) }}, {{ ucwords($resume->applicantFirstName) }}
                    {{ ucwords($resume->applicantMiddleInitial) }}</p>

                    <div class="cv-buttons">
                        <a href="{{ route('resume.show', $resume->id) }}" data-bs-toggle="tooltip" title="View CV"><i class="bi bi-eye"></i></a>
                        <div class="vr"></div>
                        <a href="{{ route('resume.edit', $resume->id) }}" data-bs-toggle="tooltip" title="Edit"><i class="bi bi-pencil"></i></a>
                    </div>

                <div class="location">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p>{{ ucwords($resume->address) }}</p>
                </div>

                <div class="job-applied">
                    <i class="bi bi-briefcase-fill"></i>
                    <p>{{ ucwords($resume->applyingFor) }}</p>
                </div>
            </div>
        </div>
        <div class="status">
            <div class="status-circle"
                style="background-color: 
            @if ($resume->applicantStatus == 'screening')
            #3633ff
            @elseif($resume->applicantStatus == 'for interview')
            #FFA500
            @elseif($resume->applicantStatus == 'hired')
            #008000
            @elseif($resume->applicantStatus == 'dropped')
            #FF0000 
            @endif">
            </div>
            <span style="color: 
            @if ($resume->applicantStatus == 'screening')
            #3633ff
            @elseif($resume->applicantStatus == 'for interview')
            #FFA500
            @elseif($resume->applicantStatus == 'hired')
            #008000
            @elseif($resume->applicantStatus == 'dropped')
            #FF0000 
            @endif">{{ ucwords($resume->applicantStatus) }}</span>
        </div>
        
    </div>
@endif
