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
        <img src="https://foodsafety.feastogether.com.tw/build/assets/logoWithText.1dcdeb88.png" alt="" style="width: 50px">
        <span >食安及5S外場稽核報告</span>
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
                <td colspan="10" align="center">{{ 100 + $defects->sum }}</td>
            </tr>
            <tr>
                <td colspan="1" align="center">各站分數及缺失數</td>
                <td colspan="11" align="left">
                    <br/>
                    外場：{{ $defects->sum }}分，缺失數 {{ $defects->count() }} 項
                </td>
            </tr>

                @foreach ($defects as $item)
                    <tr>
                        <td colspan="12" align="center">{{ $item->restaurantWorkspace->area }}</td>
                    </tr>
                    <tr>
                        @foreach ($item->images as $image)
                        <td colspan="6" style="text-align: center">
                            <br/>
                            @if (request()->isSecure())
                                <img src="{{ asset('storage/' . $image) }}" alt="test" width="200px">
                            @else
                                {{ asset('storage/' . $image) }}                               
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td colspan="3" align="">缺失分類</td>
                        <td colspan="9" align="">{{ $item->defect->group }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="">報告呈現說明</td>
                        <td colspan="9" align="">{{ $item->defect->report_description }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="">備註</td>
                        <td colspan="9" align="">
                            {{ $item->memo }}
                            @if($item->is_ignore)
                                <span style="color: red">（忽略扣分）</span>
                            @endif
                        </td>
                    </tr>
                @endforeach

        </table>
    </div>

</body>
</html>