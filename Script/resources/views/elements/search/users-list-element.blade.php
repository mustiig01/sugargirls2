<div class="user-search-box-item mb-4 text-center">
    <div class="row gx-5 px-4">
        <div class="col ">
            <div class="text-truncate user-search-box-info ">
                <div class="m-0 h6 text-truncate  ">
                    <div class="col pr-0 pl-0 mb-2">
                        <span class="vr-real btn btn-primary" data-toggle="tooltip" data-placement="top"
                            title="{{__('Verificeret bruger af sugargirls')}}"> Real* </span>
                        <img src="{{$user->avatar}}" class="avatar rounded-circle shadow" />
                    </div>
                </div>
                <a href="{{route('profile', ['username' => $user->username])}}"
                    class="text-bold text-{{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? 'white' : 'dark') : (Cookie::get('app_theme') == 'dark' ? 'white' : 'dark'))}} ">
                    {{$user->name}}
                </a>
                <div class="text-truncate small mb-2 mt-1"><a href="{{route('profile', ['username' => $user->username])}}"
                        class="text-muted">&commat;{{$user->username}}
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>