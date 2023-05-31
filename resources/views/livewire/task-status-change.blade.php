<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
        <h4 wire:model='task' wire:click='changeToPendingApproval'>稽核任務
            @if ($task->status == 'completed')
                <button class="badge badge-light-success mb-2 me-1">已完成</button>
            @elseif($task->status == 'pending_approval')
                <button class="badge badge-light-danger mb-2 me-1">待審核</button>
            @elseif($task->status == 'processing')
                <button class="badge badge-light-warning mb-2 me-1">稽核中</button>
            @elseif($task->status == 'pending')
                <button class="badge badge-light-primary mb-2 me-1">未稽核</button>
            @endif
        </h4>
    </div>
</div>
