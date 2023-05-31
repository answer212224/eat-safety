<div>

    <div class="col-md-12">
        <div class="form-group mt-3">
            <label class="form-label">選擇分店代號</label>
            <select wire:model='restaurant' class="form-control" name="restaurant_id" placeholder="選擇分店代號..."
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
                        <input class="form-check-input me-1" type="checkbox" value="{{ $defaltMeal->id }}" checked
                            disabled>
                        {{ $defaltMeal->name }}
                        <input class="form-check-input me-1" type="checkbox" name="defaltMeals[]"
                            value="{{ $defaltMeal->id }}" checked hidden>
                        {{ $defaltMeal->name }}
                    </label>
                @endforeach

                <div class="list-group">
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
    <div class="row my-3">
        <div class="col-md-12">
            <div class="form-check form-switch form-check-inline form-switch-warning">
                <input wire:model='hasProject' class="form-check-input" type="checkbox" role="switch" name="hasProject"
                    id="flexSwitchCheckDefault">
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
</div>
