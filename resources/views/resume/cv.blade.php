<x-navbar>
    <div class="cv-wrapper">
        <div class="view-status">
            <div class="dropdown">
                <form action="{{ route('resume.update', $resume->id) }}" method="post">
                    @csrf

                    @method('PUT')
                    <input type="hidden" name="resumeId" id="resumeId" value="{{ $resume->id }}">
                    <label for="applicantStatus">Application Status</label>
                    <select class="form-select" name="applicantStatus" id="appStatus"
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
            <div class="status-progress-view">
                <div class="hcircle hcircle-1"><span>New</span></div>
                <div class="hcircle hcircle-2"><span>Screening</span></div>
                <div class="hcircle hcircle-3"><span>Interview</span></div>
                <div class="hcircle hcircle-4"><span>Hire</span></div>
            </div>
        </div>

        <x-resumes :resume="$resume" full />
    </div>
</x-navbar>
