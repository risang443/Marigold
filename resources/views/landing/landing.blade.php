@include('landing.head')
<body>
    @include('landing.pages.navbar')
    <div class="w-screen">
        @include('landing.pages.hero')
        @include('landing.pages.productlanding')
        @include('landing.pages.monitorlanding')
        @include('landing.pages.thankyou')
    </div>
    
    @include('landing.footer')


</body>
</html>