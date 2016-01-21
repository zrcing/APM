@if(session()->has('error'))
{{ session('error') }}
@endif
<form action="{{ url('auth/register') }}" method="post">
{{ csrf_field() }}
用户名：<input type="text" name="name"><br /><br />
邮箱：<input type="text" name="email"><br /><br />
密码：<input type="text" name="password"><br /><br />
<button type="submit">注册</button>
</form>