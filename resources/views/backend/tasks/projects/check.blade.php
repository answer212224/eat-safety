<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">專案列表</h5>
            <p>需檢查項目有</p>
            <form action="{{ route('task-project-submit', ['task' => $task]) }}" method="post">
                @csrf
                <div class="list-group">
                    @foreach ($task->projects as $project)
                        <label class="list-group-item">
                            <input class="form-check-input me-1" @if ($project->pivot->is_taken == 1) checked @endif
                                type="checkbox" name="project_tasks[{{ $project->id }}]">
                            {{ $project->description }}
                        </label>
                    @endforeach
                </div>

                <button class="btn btn-success">submit</button>
            </form>
        </div>
    </div>


    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
