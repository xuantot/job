{{-- @foreach ($email as $item)
<p>Mã code thay đổi mật khẩu, vui lòng không cung cấp cho bất kỳ ai {{$item->password}}</p>
<p>Nhấn vào đây để đổi mật khẩu <a href="{{$url}}"></a></p>
@endforeach --}}
@foreach ($email as $item)
Mã code lấy lại mật khẩu của bạn là: {{$item->password}} Vui lòng không cung cấp mã này cho bất kỳ ai
@endforeach
Kích vào đây <a href="{{$route}}">vào đây</a> để đổi mật khẩu
