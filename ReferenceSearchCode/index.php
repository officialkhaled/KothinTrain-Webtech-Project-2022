<html>
    <head>
        <title>Search Information</title>
    </head>
    <body>
        <style>
            *{
                font-family: tahoma;
                font-size: 14px
            }
            form{
                margin: auto;
                width: 300px;
                padding: 10px;
                margi-top= 30px;
                box-shadow: 0px 0px 10px #aaa;
                border-radious: 10px;
            }

            .search{
                width: 280px;
                padding: 10px;
                border-radious: 10px;
                border: solid thin #aaa;
                outline: none;
            }
            .results{
                width: 270px;
                padding: 4px;
                border-radious: 10px;
                border: solid thin #aaa;
                outline: none;
            }

            .results div:hover{
                background-color: #00b4ff;
                color: white;
                cursor: pointer;
            }
            .hide{
                display: none;
            }

        </style>
        <form>
            <h3>Search</h3>
            <input class="search js-search"   oninput= "get_data(this.value)"  type="text" name="" autofocus= "true" placeholder="Search..."><br>

            <div class = "results js-results hide">
                <div>Komlapur Railway Station</div>
                <div>Jashore Railway Station</div>
            </div>
            <br>
            <br>

        </form>

       
</body>
<script type="text/javascript"> //JS
    function get_data(text)
    {
        if (text.trim() == "") //checking empty
        return  
        
        
        var text = document.querySelector(".js-search").value;
        var form = new FormData();
        form.append('text',text);


        var ajax = new XMLHttpRequest(); //to read data from the server side using JS
        ajax.addEventListener('readystatechange', function(){
            if(ajax.readyState == 4 && ajax.status == 200)
            {
                //result
                handle_result(ajax.responseText);
            }
        });

        ajax.open('post','connection.php', true); // anything here back as a result, #JSON
        ajax.send(form);
    }

    function handle_result(result)
    {

        //console.log(result);
        var result_div= document.querySelector(".js-results");
        var str = "";

        var obj= JSON.parse(result); //JSON Object

        //for several objects (array of objects) we can use for loop here
        for(var i = obj.length-1;i>=0;i--)
        {
            str += `<a href= 'info.php?id=${obj[i].id}'><div>` + obj[i].name + "</div> </a>";
        }
        //consol.log(result);
        result_div.innerHTML = str;
        if(obj.length>0)
        {
        show_results();
        }
        else{
            hide_results();
        }
    }

    function show_results()
    {
        var result_div= document.querySelector(".js-results");
        result_div.classList.remove("hide");
    }

    function hide_results()
    {
        var result_div= document.querySelector(".js-results");
        result_div.classList.add("hide");
    }
</script>
</html>