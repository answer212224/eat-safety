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
                    採樣 {{ $task->meals->count() }} 項: {{ $task->meals->pluck('name')->implode('、') }}
                </p>
                <p class="note-description">
                    專案 {{ $task->projects->count() }} 項: {{ $task->projects->pluck('description')->implode('。') }}
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
                            <a class="dropdown-item" href="{{ route('task-create', ['task' => $task]) }}">開始稽核</a>

                            <a class="dropdown-item"
                                href="{{ route('task-defect-owner', ['task' => $task]) }}">查看缺失</a>

                            @if ($task->meals->count() > 0)
                                <a class="dropdown-item" href="{{ route('task-meal-check', ['task' => $task]) }}">
                                    餐點採樣</a>
                            @endif
                            @if ($task->projects->count() > 0)
                                <a class="dropdown-item" href="{{ route('task-project-check', ['task' => $task]) }}">
                                    專案執行</a>
                            @endif
                        @endif
                        <a class="dropdown-item" href="{{ route('task-defect-show', ['task' => $task]) }}">
                            主管核對</a>
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
