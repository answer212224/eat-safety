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
        <span>{{ $task->category }}外場稽核報告</span>
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
                <td colspan="2" align="center">食安分數</td>
                <td colspan="10" align="center">{{ 100 + $sum }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">各站分數及缺失數</td>
                <td colspan="11" align="left">
                    <br />
                    外場：{{ 100 + $sum }}分，缺失數 {{ $defects->count() }} 項
                </td>
            </tr>
            {{-- 顯示第一個defects --}}
            @if ($defects->first())
                <tr>
                    <td colspan="12" align="center" style="background-color:bisque">
                        {{ $defects->first()->restaurantWorkspace->area }}</td>
                </tr>
                <tr>
                    @foreach ($defects->first()->images as $image)
                        <td colspan="6" style="text-align: center">
                            <img src="data:image/png;base64,{{ $image }}" alt="test" width="150px">
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="3" align="">缺失分類</td>
                    <td colspan="9" align="">{{ $defects->first()->defect->group }}</td>
                </tr>

                {{-- 缺失類別 --}}
                <tr>
                    <td colspan="3" align="">缺失類別</td>
                    <td colspan="9" align="">{{ $defects->first()->defect->category }}</td>
                </tr>

                <tr>
                    <td colspan="3" align="">實際扣分</td>
                    <td colspan="9" align="">
                        @if (
                            $defects->first()->is_ignore ||
                                $defects->first()->is_not_reach_deduct_standard ||
                                $defects->first()->is_suggestion ||
                                $defects->first()->is_repeat)
                            0
                        @else
                            {{ $defects->first()->defect->deduct_point }}
                        @endif
                    </td>

                </tr>

                <tr>
                    <td colspan="3" align="">報告呈現說明</td>
                    <td colspan="9" align="">{{ $defects->first()->defect->report_description }}</td>
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
                        @if ($defects->first()->is_repeat)
                            <span style="color: red">（重複缺失）</span>
                        @endif
                    </td>
                </tr>
            @endif
        </table>
        @if ($defects->count() > 1)
            {{-- 換頁 --}}
            <div style="page-break-after:always"></div>
            {{-- 換頁 --}}
        @endif


        {{-- 忽略第一個defects --}}
        @foreach ($defects->skip(1) as $item)
            <table border="1" width="100%" height="100%" style="padding: 2px;margin-top: 10px;">
                <tr>
                    <td colspan="12" align="center" style="background-color:bisque">
                        {{ $item->restaurantWorkspace->area }}</td>
                </tr>
                <tr>
                    @foreach ($item->images as $image)
                        <td colspan="6" style="text-align: center">
                            <img src="data:image/png;base64,{{ $image }}" alt="test" width="150px">
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="3" align="">缺失分類</td>
                    <td colspan="9" align="">{{ $item->defect->group }}</td>
                </tr>

                {{-- 缺失類別 --}}
                <tr>
                    <td colspan="3" align="">缺失類別</td>
                    <td colspan="9" align="">{{ $item->defect->category }}</td>
                </tr>

                <tr>

                    <td colspan="3" align="">實際扣分</td>
                    <td colspan="9" align="">
                        @if ($item->is_ignore || $item->is_not_reach_deduct_standard || $item->is_suggestion || $item->is_repeat)
                            0
                        @else
                            {{ $item->defect->deduct_point }}
                        @endif
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="">報告呈現說明</td>
                    <td colspan="9" align="">{{ $item->defect->report_description }}</td>
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
                        @if ($item->is_repeat)
                            <span style="color: red">（重複缺失）</span>
                        @endif
                    </td>
                </tr>

            </table>
            {{-- 每兩次換頁，如果是最後一個就不要 --}}
            @if ($loop->iteration % 2 == 0 && !$loop->last)
                {{-- 換頁 --}}
                <div style="page-break-after:always"></div>
                {{-- 換頁 --}}
            @endif
        @endforeach
    </div>

</body>

</html>
