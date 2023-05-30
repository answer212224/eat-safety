<div class="switch form-switch-custom switch-inline form-switch-primary">
    <input wire:model='isCompleted' class="switch-input" type="checkbox" role="switch" id="showPublicly"
        @if ($isCompleted) checked @endif wire:click="toggleIsCompleted">
    <label class="switch-label" for="showPublicly">是否已完成稽核</label>
</div>
