<!-- 模板 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
</head>
<body>

<div class="sidebar" style="width: 15%; float: left; background-color:#aaa;">
  側邊欄
</div>

<div class="container">
  {{-- 給引用的blade填入內容 --}}
  @yield('content')
</div>


</body>
</html>
