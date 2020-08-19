@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>


                    {{--                <form action="" method="GET">--}}
                    {{--                    <label for=""></label>--}}
                    {{--                    <input type="text">--}}

                    {{--                    <label for=""></label>--}}
                    {{--                    <input type="text">--}}
                    {{--                </form>--}}

                    {{--                    <form autocomplete="off" id="trackList" action="{{ route('getTracks') }}"--}}
                    {{--                          method="get">--}}
                    {{--                        @csrf--}}
                    {{--                        <div class="autocomplete">--}}
                    {{--                            <input id="dontKnow" type="text" placeholder="dontKnow" name="searchStation">--}}
                    {{--                            <input type="hidden" value="{{ $user->token }}" name="userToken">--}}
                    {{--                        </div>--}}
                    {{--                        <button type="submit"><i class="fa fa-search"></i>asdasd</button>--}}
                    {{--                    </form>--}}


                    <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>


                    <button id="button">Get External Content</button>


                </div>
            </div>
        </div>
    </div>

    <script>

        let $token = {{ $user->token }}

        $(document).ready(function () {
            $("button").click(function () {
                $.ajax({
                    url: 'https://api.spotify.com/v1/me/top/artists',
                    type: 'GET',
                    headers: {'Authorization' : $token},
                    data: {
                        grant_type: 'authorization_code',
                        client_id: '7e6ed5e8d96145799fe960bd8e6d1c9e',
                        client_secret: 'e32f33e4cc8749a59e55cdca85b99c25'
                    },
                    {{--beforeSend: function (xhr) {--}}
                    {{--    xhr.setRequestHeader("Authorization", )--}}
                    {{--},--}}
                    dataType: 'json',
                    success: function (data) {
                        alert('Data: ' + data);
                    },
                    error: function (request, error) {
                        alert("Request: " + JSON.stringify(request));
                    }
                });
            });
        });


    </script>




@endsection
