<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.preloader')

    @include('partials.header')

    @include('partials.modal.modalDaftarOrMasuk')
    @include('partials.modal.modaldaftarkelas')

    @yield('content')

    @include('partials.footer')
    @include('partials.script')
</body>

</html>
