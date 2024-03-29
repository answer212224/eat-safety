<div
    class="note-item all-notes @if ($task->status == 'completed') note-personal
    @elseif ($task->status == 'pending_approval') note-important
@elseif ($task->status == 'processing') note-work @else note-social @endif">

    <div class="note-inner-content">
        <div class="note-content">

            <div class="switch form-switch-custom switch-inline form-switch-primary justify-content-between">
                <label class="switch-label" for="showPublicly">是否已完成稽核</label>
                <input wire:model='isCompleted' class="switch-input" type="checkbox" role="switch" id="showPublicly"
                    @if ($isCompleted) checked @endif wire:click="toggleIsCompleted">


            </div>
            <div class="d-flex justify-content-between">
                <p class="note-title">
                    {{ $task->category }} </p>
                <div wire:loading.inline-flex class="spinner-grow text-warning align-self-center"></div>
            </div>

            <hr />

            <div class="note-description-content">
                <p class="note-description">
                    <strong>採樣</strong> <u>{{ $task->meals->count() }}</u> <strong>項:</strong>
                    @foreach ($task->meals as $meal)
                        <span class="badge badge-dark mb-1">
                            {{ $meal->name }}
                            @if ($meal->pivot->is_taken)
                                <span class="badge badge-success">有帶</span>
                            @endif
                            @if ($meal->pivot->memo != null)
                                <span class="badge badge-secondary">{{ $meal->pivot->memo }}</span>
                            @endif
                        </span>
                    @endforeach
                </p>
                <hr>
                <p class="note-description">
                    <strong>專案</strong> <u>{{ $task->projects->count() }}</u> <strong>項:</strong>
                    @foreach ($task->projects as $project)
                        <span class="badge badge-dark mb-1">
                            {{ $project->name }}：{{ $project->description }}
                            @if ($project->pivot->is_checked)
                                <span class="badge badge-success">完成</span>
                            @endif
                        </span>
                    @endforeach
                </p>
            </div>
            <hr />
            <p class="meta-time">
                {{ $task->task_date }}
                {{ $task->users->pluck('name')->implode('、') }}
                {{ $task->restaurant->brand }}{{ $task->restaurant->shop }}
            </p>


        </div>
        <div class="note-action">
            <div class="tags-selector btn-group">
                <div class="dropdown-toggle">
                    <a class="dropdown-toggle" href="#" role="button" id="elementDrodpown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-more-vertical">
                            <circle cx="12" cy="12" r="1">
                            </circle>
                            <circle cx="12" cy="5" r="1">
                            </circle>
                            <circle cx="12" cy="19" r="1">
                            </circle>
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right d-icon-menu " aria-labelledby="elementDrodpown">

                        @if ($task->status != 'completed')
                            @if ($task->category == '食安及5S')
                                <a class="dropdown-item" href="{{ route('task-create', ['task' => $task]) }}">食安稽核</a>

                                <a class="dropdown-item"
                                    href="{{ route('task-defect-owner', ['task' => $task]) }}">查看食安缺失</a>
                            @endif
                            @if ($task->category == '食安及5S複稽')
                                <a class="dropdown-item" href="{{ route('task-create', ['task' => $task]) }}">食安複稽</a>

                                <a class="dropdown-item"
                                    href="{{ route('task-defect-owner', ['task' => $task]) }}">查看食安缺失</a>
                            @endif
                            @if ($task->category == '清潔檢查')
                                <a class="dropdown-item" href="{{ route('task-create', ['task' => $task]) }}">清潔檢查</a>

                                <a class="dropdown-item"
                                    href="{{ route('task-clear-defect-owner', ['task' => $task]) }}">查看清檢缺失</a>
                            @endif

                        @endif

                        @if ($task->meals->count() > 0)
                            <a class="dropdown-item" href="{{ route('task-meal-check', ['task' => $task]) }}">
                                餐點採樣</a>
                        @endif
                        @if ($task->projects->count() > 0)
                            <a class="dropdown-item" href="{{ route('task-project-check', ['task' => $task]) }}">
                                專案查核</a>
                        @endif

                        @if ($task->category == '食安及5S' || $task->category == '食安及5S複稽')
                            <a class="dropdown-item" href="{{ route('task-defect-show', ['task' => $task]) }}">
                                主管食安核對</a>
                        @elseif($task->category == '清潔檢查')
                            <a class="dropdown-item" href="{{ route('task-clear-defect-show', ['task' => $task]) }}">
                                主管清檢核對</a>
                        @endif
                        @if ($task->category != '餐點採樣')
                            <a href="{{ route('task-inner-report', ['task' => $task]) }}" class="dropdown-item"
                                target="_blank">內場稽核報告
                            </a>
                            <a href="{{ route('task-outer-report', ['task' => $task]) }}" class="dropdown-item"
                                target="_blank">外場稽核報告
                            </a>
                        @endif

                    </div>
                </div>
            </div>



        </div>
        <div class="note-footer">
            @if ($task->status == 'completed')
                <span class="badge badge-light-success">已完成</span>
            @elseif($task->status == 'pending_approval')
                <span class="badge badge-light-danger">待核對</span>
            @elseif($task->status == 'processing')
                <span class="badge badge-light-warning">稽核中</span>
            @else
                <span class="badge badge-light-secondary">未稽核</span>
            @endif

        </div>
    </div>
</div>
