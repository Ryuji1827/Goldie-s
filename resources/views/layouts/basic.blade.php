<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="member" content="必由館出身の仲良し５人組のサイト">
</head>
<body id="background_black">
    <div class="big_box">
        <div class="prof_box">
                <div class="prof_img">
                    <img id="@yield('img_id')" src="/images/@yield('img')">
                </div>
                <div class="profile">
                    <table>
                        <tr>
                            <th>職業</th>
                            <td>@yield('job')</td>
                        </tr>
                        <tr>
                            <th>出身</th>
                            <td>@yield('from')</td>
                        </tr>
                        <tr>
                            <th>生年月日</th>
                            <td>@yield('birthday')</td>
                        </tr>
                        <tr>
                            <th>趣味</th>
                            <td>@yield('hobby')</td>
                        </tr>
                        <tr>
                            <th>好きな食べ物</th>
                            <td>@yield('like_food')</td>
                        </tr>
                        <tr>
                            <th>嫌いな食べ物</th>
                            <td>@yield('dislike_food')</td>
                        </tr>
                        <tr>
                            <th>ひとこと</th>
                            <td>@yield('message')
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="name">
                    @yield('name')
                </div>
                <div class="history">
                    @yield('history')
                </div>
        </div>
    </div>

</body>
</html>