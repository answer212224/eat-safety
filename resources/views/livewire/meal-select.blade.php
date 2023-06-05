<div class="row">

    <div class="col-md-12">
        <div class="d-flex" wire:model='category'>
            <div class="n-chk">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="radio" name="category" checked value="食安及5S" id="rwork">
                    <label class="form-check-label" for="rwork">食安及5S</label>
                </div>
            </div>
            <div class="n-chk">
                <div class="form-check form-check-warning form-check-inline">
                    <input class="form-check-input" type="radio" name="category" value="清潔檢查" id="rtravel">
                    <label class="form-check-label" for="rtravel">清潔檢查</label>
                </div>
            </div>

            <div class="n-chk">
                <div class="form-check form-check-success form-check-inline">
                    <input class="form-check-input" type="radio" name="category" value="餐點採樣" id="rPersonal">
                    <label class="form-check-label" for="rPersonal">餐點採樣</label>
                </div>
            </div>

        </div>

    </div>

    <div class="col-md-12">
        <div class="form-group mt-3" wire:ignore>
            <label class="form-label">選擇稽核員</label>
            <select class="form-control" name="users[]" multiple placeholder="選擇稽核員..." autocomplete="off" required
                id="select-users">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group mt-3">
            <label class="form-label">選擇分店代號</label>
            <select class="form-control" wire:model='restaurant' name="restaurant_id" placeholder="選擇分店代號..."
                autocomplete="off" id="select-sid" required>
                <option value="">選擇分店代號...</option>
                @foreach ($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">
                        {{ $restaurant->sid }} {{ $restaurant->brand }} {{ $restaurant->shop }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group mt-3">
            <label class="form-label">稽核日期</label>
            <input id="event-start-date" wire:model='start' name="task_date" type="date" class="form-control"
                required>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-12">
            <div class="form-check form-switch form-check-inline">
                <input wire:model='hasMeal' class="form-check-input" type="checkbox" role="switch" name="hasMeal"
                    id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">採樣</label>
            </div>
        </div>
        {{-- 採樣checkbox --}}
        @if ($hasMeal)
            <div class="list-group">
                @foreach ($defaltMeals as $defaltMeal)
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="defaltMeals[]"
                            value="{{ $defaltMeal->id }}" checked>
                        {{ $defaltMeal->name }}

                    </label>
                @endforeach
                @foreach ($optionMeals as $optionMeal)
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="optionMeals[]"
                            value="{{ $optionMeal->id }}">
                        {{ $optionMeal->name }}
                    </label>
                @endforeach
            </div>

        @endif
        {{-- 採樣checkbox end --}}
    </div>

    @if ($category != '餐點採樣')
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-check form-switch form-check-inline form-switch-warning">
                    <input wire:model='hasProject' class="form-check-input" type="checkbox" role="switch"
                        name="hasProject" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">專案</label>
                </div>
            </div>
            @if ($hasProject)
                <div class="list-group">
                    @foreach ($projects as $project)
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="{{ $project->id }}"
                                name="projects[]">
                            {{ $project->description }}
                        </label>
                    @endforeach
                </div>
            @endif

        </div>
    @endif

</div>

@push('scripts')
    <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new TomSelect("#select-users", {
                maxItems: 2
            });

        });
    </script>
@endpush
