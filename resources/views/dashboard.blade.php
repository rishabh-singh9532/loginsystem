@extends('layouts.front')
@section('content')
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">

        {{-- <h5 style="cursor:pointer;" data-code="{{ Auth::user()->name }}" class="copy"><span class="fa fa-copy">{{ Auth::user()->email }}  Copy Referral
                link</span></h5> --}}
        <h2 class="mb-4">Dashboard</h2>
        <h1> <span>Hello{{Auth::user()->name}}</span></h1>
        @if (Session::has('error'))
        <p class="text-danger text-center">{{ Session::get('error') }}</p>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Logout</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td><a href="{{route('logout')}}" class="btn btn-warning">Logout</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('.copy').click(function() {
                // alert("hello");
                $(this).parent().prepend('<span class="copied_text">Copied</span>');
                var code = $(this).attr('data-code');
                var url = "{{ URL::to('/') }}/referral-registration?ref=" + code;
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(url).select();
                document.execCommand("copy");
                $temp.remove();

                setTimeout(() => {
                    $('.copied_text').remove();
                }, 2000);
            });
        });
    </script>
@endsection
