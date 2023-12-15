{{-- pdf --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>

<body>
    {{-- header logo --}}
    <div class="header">
        <img src="https://foodsafety.feastogether.com.tw/build/assets/logoWithText.1dcdeb88.png" alt=""
            style="width: 50px">
        <span>清潔檢查外場稽核報告</span>
    </div>
    <div class="table">
        <table border="1" width="100%" height="100%" style="padding: 2px;margin-top: 10px;">
            <tr>
                <td colspan="1" align="center">品牌</td>
                <td colspan="3" align="center">{{ $task->restaurant->brand }}</td>
                <td colspan="1" align="center">分店</td>
                <td colspan="3" align="center">{{ $task->restaurant->shop }}</td>
                <td colspan="2" align="center">外場主管</td>
                <td colspan="2" align="center">{{ $task->outer_manager }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">日期</td>
                <td colspan="3" align="center">{{ $task->task_date->format('Y年n月j日') }}</td>
                <td colspan="1" align="center">時間</td>
                <td colspan="2" align="center">{{ $task->task_date->format('h:i') }}</td>
                <td colspan="2" align="center">稽核員</td>
                <td colspan="3" align="center">{{ $task->users->pluck('name')->implode('、') }}</td>
            </tr>
            <tr>
                <td colspan="2" align="center">清檢分數</td>
                <td colspan="10" align="center">{{ 100 + $sum }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">各站分數及缺失數</td>
                <td colspan="11" align="left">
                    <br />
                    外場：{{ 100 + $sum }}分，缺失數 {{ $defects->count() }} 項
                </td>
            </tr>
        </table>
        {{-- 顯示第一個defects --}}
        @if ($defects->first())
            <table border="1" width="100%" height="100%" style="padding: 2px;margin-top: 10px;">
                <tr>
                    <td colspan="12" align="center" style="background-color:bisque">
                        {{ $defects->first()->restaurantWorkspace->area }}</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center">
                        @isset($defects->first()->images[0])
                            <img src="data:image/png;base64,{{ $defects->first()->images[0] }}" alt="test"
                                width="150px">
                        @endisset
                    </td>
                    <td colspan="6" style="text-align: center">
                        @isset($defects->first()->images[1])
                            <img src="data:image/png;base64,{{ $defects->first()->images[1] }}" alt="test"
                                width="150px">
                        @endisset
                    </td>
                </tr>
                @isset($defects->first()->images[2])
                    <tr>
                        <td colspan="6" style="text-align: center">
                            @isset($defects->first()->images[2])
                                <img src="data:image/png;base64,{{ $defects->first()->images[2] }}" alt="test"
                                    width="150px">
                            @endisset
                        </td>
                        <td colspan="6" style="text-align: center">
                            @isset($defects->first()->images[3])
                                <img src="data:image/png;base64,{{ $defects->first()->images[3] }}" alt="test"
                                    width="150px">
                            @endisset
                        </td>
                    </tr>
                @endisset
                <tr>
                    <td colspan="3" align="">主項目</td>
                    <td colspan="9" align="">{{ $defects->first()->clearDefect->main_item }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="">次項目</td>
                    <td colspan="9" align="">{{ $defects->first()->clearDefect->sub_item }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="">數量</td>
                    <td colspan="9" align="">{{ $defects->first()->amount }}</td>
                </tr>
                <tr>
                    {{-- 實際扣分 --}}
                    <td colspan="3" align="">實際扣分</td>
                    <td colspan="9" align="">
                        @if ($defects->first()->is_ignore || $defects->first()->is_not_reach_deduct_standard || $defects->first()->is_suggestion)
                            0
                        @else
                            {{ $defects->first()->amount * -2 }}
                        @endif
                    </td>

                </tr>
                <tr>
                    <td colspan="3" align="">缺失說明</td>
                    <td colspan="9">
                        @if ($defects->first()->description == null)
                            無
                        @else
                            {{-- array to string --}}
                            @foreach ($defects->first()->description as $description)
                                {{ $description }}
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="">備註</td>
                    <td colspan="9" align="">
                        {{ $defects->first()->memo }}
                        @if ($defects->first()->is_ignore)
                            <span style="color: red">（忽略扣分）</span>
                        @endif
                        @if ($defects->first()->is_not_reach_deduct_standard)
                            <span style="color: red">（未達扣分標準）</span>
                        @endif
                        @if ($defects->first()->is_suggestion)
                            <span style="color: red">（建議事項）</span>
                        @endif
                    </td>
                </tr>
            </table>
            <div style="page-break-after:always"></div>
        @endif

        {{-- 忽略第一個defects --}}
        @foreach ($defects->skip(1) as $item)
            <table border="1" width="100%" height="100%" style="padding: 2px;margin-top: 10px;">
                <tr>
                    <td colspan="12" align="center" style="background-color:bisque">
                        {{ $item->restaurantWorkspace->area }}</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center">
                        @isset($item->images[0])
                            <img src="data:image/png;base64,{{ $item->images[0] }}"
                                width="{{ count($item->images) >= 3 ? '80px' : '150px' }}" alt="test">
                        @endisset
                    </td>
                    <td colspan="6" style="text-align: center">
                        @isset($item->images[1])
                            <img src="data:image/png;base64,{{ $item->images[1] }}" alt="test"
                                width="{{ count($item->images) >= 3 ? '80px' : '150px' }}">
                        @endisset
                    </td>
                </tr>
                @isset($item->images[2])
                    <tr>
                        <td colspan="6" style="text-align: center">
                            @isset($item->images[2])
                                <img src="data:image/png;base64,{{ $item->images[2] }}" alt="test"
                                    width="{{ count($item->images) >= 3 ? '80px' : '150px' }}">
                            @endisset
                        </td>
                        <td colspan="6" style="text-align: center">
                            @isset($item->images[3])
                                <img src="data:image/png;base64,{{ $item->images[3] }}" alt="test"
                                    width="{{ count($item->images) >= 3 ? '80px' : '150px' }}">
                            @endisset
                        </td>
                    </tr>
                @endisset
                <tr>
                    <td colspan="3" align="">主項目</td>
                    <td colspan="9" align="">{{ $item->clearDefect->main_item }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="">次項目</td>
                    <td colspan="9" align="">{{ $item->clearDefect->sub_item }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="">數量</td>
                    <td colspan="9" align="">{{ $item->amount }}</td>
                </tr>
                <tr>
                    {{-- 實際扣分 --}}
                    <td colspan="3" align="">實際扣分</td>
                    <td colspan="9" align="">
                        @if ($item->is_ignore || $item->is_not_reach_deduct_standard || $item->is_suggestion)
                            0
                        @else
                            {{ $item->amount * -2 }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="">缺失說明</td>
                    <td colspan="9">
                        @if ($item->description == null)
                            無
                        @else
                            {{-- array to string --}}
                            @foreach ($item->description as $description)
                                {{ $description }}
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="">備註</td>
                    <td colspan="9" align="">
                        {{ $item->memo }}
                        @if ($item->is_ignore)
                            <span style="color: red">（忽略扣分）</span>
                        @endif
                        @if ($item->is_not_reach_deduct_standard)
                            <span style="color: red">（未達扣分標準）</span>
                        @endif
                        @if ($item->is_suggestion)
                            <span style="color: red">（建議事項）</span>
                        @endif
                    </td>
                </tr>

            </table>
            {{-- 每兩次換頁，如果是最後一個就不要 --}}
            @if ($loop->iteration % 2 == 0 && !$loop->last)
                <div style="page-break-after:always"></div>
            @endif
        @endforeach
    </div>

</body>

</html>
