<div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
    <div class="widget-content widget-content-area blog-create-section">
        <div class="row">
            <div class="col-xxl-12 mb-4">
                <div class="switch form-switch-custom switch-inline form-switch-primary">
                    <input wire:model='isCompleted' class="switch-input" type="checkbox" role="switch" id="showPublicly"
                        @if ($isCompleted) checked @endif wire:click="toggleIsCompleted">
                    <label class="switch-label" for="showPublicly">是否已完成稽核</label>
                </div>
            </div>

        </div>
    </div>
</div>
