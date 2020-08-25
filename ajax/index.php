<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
    
    </div>
    <button id="button">load data</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Asynchronous JS And XML
    
    // function loadData() {
    //     let xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("container").innerHTML = this.responseText;
    //         }
    //     };
    //     xhttp.open("GET", "test.txt");
    //     xhttp.send();
    // }

    // $(document).ready(function() {
    //     $('#button').click(function() {
    //         console.log('hello');
    //         $('#container').load('load.php',{id:1,name:'Mg Mg'});
    //     })
    // });

    // $(document).ready(function() {
    //     $('#button').click(function() {
    //         $.get('load.php',{id:1,name:'Mg Mg'},function(data,status) {
    //             console.log('Data : ',data);
    //             console.log('Status : ',status);
    //             $('#container').html(data);
    //         })
    //     })
    // });

    // $(document).ready(function() {
    //     $('#button').click(function() {
    //         $.post('load.php',{id:1,name:'Mg Mg'},function(data,status) {
    //             console.log('Data : ',data);
    //             console.log('Status : ',status);
    //             $('#container').html(data);
    //         })
    //     })
    // });

    $(document).ready(function() {
        $('#button').click(function() {
            $.ajax({
                url: 'load.php',
                type:'POST',
                data:{id:1,name:'Mg Mg'},
                success: function(data){
                    console.log(data);
                    $('#container').html(data);
                }
            })
        })
    });
    



</script>

</html>