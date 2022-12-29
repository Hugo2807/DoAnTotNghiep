@php
    $menunotes = app\Models\Menunote::all();
    $location = app\Models\Menulocation::all();
@endphp
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light shadow-sm" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">NaFruits</a>
      @foreach ($location as $pos)
        @if ($pos->pos == "header")
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              @foreach ($menunotes as $item)
                @if($item->parent_id == 0)
                <li class="nav-item dropdown">
                    <a href="{{ route($item->slug) }}" class="nav-link">{{$item->name}}</a>
                    @include('user.page.menus.childmenu', ['item' => $item])
                </li>
                @endif
              @endforeach
              <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
              @if(Auth::guard('webuser')->check())
                {{-- @php
                  $iduser = Auth::guard('webuser')->user()->id;
                  dd(Auth::guard('webuser')->user()->id)
                @endphp --}}
                {{-- <input type="hidden" name="iduser" value="{{Auth::guard('webuser')->user()->id}}"> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    Xin chào {{ Auth::guard('webuser')->user()->hoten }}
                  </a>
                  <div class="dropdown-menu" style="text-align: center; min-width: 13rem; margin: 0;">
                    <div>
                      <a href="{{ route('userinf.inf', Auth::guard('webuser')->user()->id) }}">Tài khoản</a>
                    </div>
                    <a href="{{ route('user.logout') }}">Đăng xuất</a>
                  </div>
                </li>
              @else
                <li class="nav-item"><a href="{{ route('user.login') }}" class="nav-link">Đăng nhập</a></li>
              @endif
            </ul>
          </div>
        @endif
      @endforeach
    </div>
  </nav>