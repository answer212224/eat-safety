<div class="">

    <div class="form-group">
        <label>主項目</label>
        <select class="form-select" wire:model="mainItem" required>
            <option value="">請選擇...</option>
            @foreach ($distinctMainItems as $distinctMainItem)
                <option value={{ $distinctMainItem }}>{{ $distinctMainItem }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group my-3">
        <label>子項目</label>
        <select class="form-select" name="clear_defect_id" id="inputSelect" wire:model="subItem" required>
            <option value="">請選擇...</option>
            @foreach ($subItems as $key => $subItem)
                <option value="{{ $key }}">{{ $subItem }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group my-3" wire:ignore>
        <label>缺失說明複選</label>
        <select id="select-state" name="description[]" multiple placeholder="選擇缺失或自行輸入(可複選)" autocomplete="off"
            name="description" required>
            <option value="">選擇缺失或自行輸入(可複選)</option>
            @if (optional($taskHasDefect)->description)
                @foreach ($taskHasDefect->description as $description)
                    <option selected value="{{ $description }}">{{ $description }}</option>
                @endforeach
            @else
                <option value="積垢不潔">積垢不潔</option>
                <option value="積塵">積塵</option>
                <option value="留有食渣">留有食渣</option>
                <option value="留有病媒屍體">留有病媒屍體</option>
            @endif
        </select>
    </div>
    <div class="form-group my-3" wire:ignore>
        <div>
            <label>數量</label>
            <input id="demo3_21" type="number" name="demo3_21" required
                @if ($taskHasDefect) value="{{ $taskHasDefect->amount }}" @else value="0" @endif>
        </div>
    </div>

    <div class="form-group my-3">
        <label>備註</label>
        <input type="text" class="form-control" name="memo" aria-label="Memo"
            @if ($taskHasDefect) value="{{ $taskHasDefect->memo }}" @endif>
    </div>


    <div class="form-check form-check-danger form-check-inline">
        <input class="form-check-input" type="checkbox" id="form-check-danger" name="is_ignore"
            @if ($taskHasDefect && $taskHasDefect->is_ignore) checked @endif>
        <label class="form-check-label" for="form-check-danger">
            忽略扣分
        </label>
    </div>


</div>


@push('scripts')
    <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
    <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new TomSelect("#select-state", {
                persist: false,
                createOnBlur: true,
                create: true
            });
        });
    </script>
@endpush
