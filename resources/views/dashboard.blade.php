<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.sumoselect/3.0.2/sumoselect.min.css" rel="stylesheet" />
</head>
<body>
    <h1>Hii {{ auth()->user()->name }}</h1>

    
    <select class="brands" multiple>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
    </select>
    <select class="models" multiple></select>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sumoselect/3.0.2/jquery.sumoselect.min.js"></script>


    <script>
        $(document).ready(function(){

            $('.brands').SumoSelect();
            $('.models').SumoSelect();
            
            $('.opt').click(function(){
                if()
                var myOption = $(this).text();

                $(".models").append("<option value='"+myOption+"'>"+ myOption+ "</option>" )

                $('.models')[0].sumo.reload();
            })
        })
    </script>
</body>
</html>

