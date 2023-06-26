<div class="widget widget-activity-four">

    <div class="widget-heading">
        <h5 class="">{{ $restaurant->brand }}{{ $restaurant->shop }} 近期活動</h5>
    </div>

    <div class="widget-content">

        <div class="mt-container-ra mx-auto">
            <div class="timeline-line">
                @foreach ($tasks as $task)
                    <div @class([
                        'item-timeline',
                        'timeline-secondary' => $task->status == 'pending',
                        'timeline-warning' => $task->status == 'processing',
                        'timeline-danger' => $task->status == 'pending_approval',
                        'timeline-success' => $task->status == 'completed',
                    ])>
                        <div class="t-dot">
                        </div>

                        <div class="t-text">
                            <p>{{ $task->users->pluck('name')->implode('、') }} - {{ $task->category }}</p>
                            <span class="badge">
                                @switch($task->status)
                                    @case('pending')
                                        未稽核
                                    @break

                                    @case('processing')
                                        稽核中
                                    @break

                                    @case('pending_approval')
                                        待核對
                                    @break

                                    @default
                                        已完成
                                @endswitch
                            </span>
                            <p class="t-time">{{ $task->task_date }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="tm-action-btn">
            <button wire:click='viewAll' class="btn"><span>查看全部</span> <svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg></button>
        </div>
    </div>
</div>
