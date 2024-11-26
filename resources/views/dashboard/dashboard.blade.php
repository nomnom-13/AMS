<x-navbar>
    <div class="db-wrapper">
        <div class="db-header">
            <h4>Dashboard</h4>

            <form class="form" action="{{ route('filter') }}" method="post">
                @csrf

                <label for="filter">Filter By</label>
                <select name="filter" id="filter" class="form-select" onchange="this.form.submit()">
                    <option value="" {{ old('filter', request('filter')) == '' ? 'selected' : '' }}>All Applicants
                    </option>
                    <option value="new" {{ old('filter', request('filter')) == 'new' ? 'selected' : '' }}>New
                    </option>
                    <option value="screening" {{ old('filter', request('filter')) == 'screening' ? 'selected' : '' }}>
                        Screening</option>
                    <option value="for interview"
                        {{ old('filter', request('filter')) == 'for interview' ? 'selected' : '' }}>For Interview
                    </option>
                    <option value="hired" {{ old('filter', request('filter')) == 'hired' ? 'selected' : '' }}>Hired
                    </option>
                    <option value="dropped" {{ old('filter', request('filter')) == 'dropped' ? 'selected' : '' }}>
                        Dropped</option>
                </select>
            </form>

        </div>

        <hr>

        <div class="row" style="margin: 0">
            @if ($resumes->isNotEmpty())
                @foreach ($resumes as $resume)
                    <div class="col-6">
                        <x-resumes :resume="$resume" />
                    </div>
                @endforeach

            @else
                <div class="col mt-4">
                    <h6 class="text-center">No resumes found.</h6>
                </div>
                
            @endif



        </div>
    </div>
</x-navbar>
