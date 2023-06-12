<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Url shortner
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- to add the custom js file for the shorten URL -->

    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
</head>
</script>
<body>

<!-- form to take the Url which need to be short-->

    <h2> Retrieves data from the provided Coingecko API endpoint. </h2>
    <div class="datas">
        
    </div>

</body>
</html>
