

<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ:</h1>
    <form method="post" action="{{ route('checkEmail') }}">
        @csrf
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" name="email" placeholder="nhập email:">
        <input type="submit" value="check">
    </form>
    @if(isset($isEmail))
        Kết quả :{{$isEmail? 'Đúng định dạng Email ': 'Sai định dạng Email'}}
    @endif
</div>
